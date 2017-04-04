<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 9:12
 */
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController
{
    private $Menu='管理员';
    public function _initialize()
    {
        parent::_initialize();
        $this->assign('Menu',$this->Menu);
    }
    public function index()
    {
        $Key=I('get.Key','');
        $Model=M('Admin');
        $Where=array();
        if(!empty($Key))
        {
            $Where['AdminName']=array('like','%'.$Key.'%');
        }

        $Count  = $Model->where($Where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($Count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $this->PageShow($Page,$Count);

        $List=$Model->where($Where)->order('AdminSort Desc,AdminID Desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('List',$List);
        $this->display();
    }

    public function add()
    {
        $this->assign('RoleList',$this->GetRoleList());
        $this->display();
    }
    public function addsave()
    {
        $AdminAllRole=I('post.AdminAllRole','');
        if($AdminAllRole!='All'){
            unset($_POST['AdminAllRole']);
        }

        $Model=D('admin');
        $Validate=array(
            array('AdminName','require','请填写您的用户名','0','','1'),
            array('AdminName','','您的用户名已被注册','0','unique','1'),
            array('AdminName','6,20','您的用户名长度请在6-20个字符之间','0','length','1'),
            array('AdminPwd','require','请填写您的密码','1','','1'),
            array('AdminPwd','6,20','您的密码长度请在6-20个字符之间','2','length','1'),
            array('AdminPwd','AdminAffirmPwd','您的两次密码输入有误','1','confirm','1'),
        );

        if(!$Model->validate($Validate)->create())
        {
            $this->error($Model->getError());
        }

        $Data=$Model->data();
        $AdminPwd=I('post.AdminPwd');
        $Data['AdminPwd']=md5($AdminPwd.md5(C('AdminKey')));
        $ID=$Model->data($Data)->add();

        if($AdminAllRole!='All') {
            $this->AdminAddRole($ID);
        }

        AdminLogRewrite($this->Menu.'添加成功,ID:'.$ID);
        $this->success($this->Menu.'添加成功');
    }


    public function edit()
    {
        $ID=I('get.id','');
        $Model=M('Admin');
        $Where=array();
        $Where['AdminID']=$ID;
        $Info=$Model->where($Where)->find();

        $RoleModel=M('auth_group_access');
        $Where=array();
        $Where['uid']=$Info['AdminID'];
        $RoleArr=$RoleModel->field('group_id')->where($Where)->select();
        $RoleIDArr=array();
        if(!empty($RoleArr))
        {
            foreach($RoleArr as $key=>$val)
            {
                $RoleIDArr[]=$val['group_id'];
            }
        }
        //dump($RoleArr);

        $this->assign('Info',$Info);
        $this->assign('RoleList',$this->GetRoleList());
        $this->assign('RoleIDArr',$RoleIDArr);
        $this->display();
    }
    public function editsave()
    {
        $AdminAllRole=I('post.AdminAllRole','');
        $ID=I('post.AdminID','');
        $this->AdminDelRole($ID);
        if($AdminAllRole!='All'){
            $_POST['AdminAllRole']='';
            $this->AdminAddRole($ID);
        }

        $Model=D('admin');
        $Validate=array(
            array('AdminPwd','6,20','您的密码长度请在6-20个字符之间','2','length','2'),
            array('AdminPwd','AdminAffirmPwd','您的两次密码输入有误','1','confirm','2'),
        );
        if(!$Model->validate($Validate)->create())
        {
            $this->error($Model->getError());
        }
        $Data=$Model->data();
        $AdminPwd=I('post.AdminPwd');
        if(!empty($AdminPwd)){
            $Data['AdminPwd']=md5($AdminPwd.md5(C('AdminKey')));
        }else{
            unset($Data['AdminPwd']);
        }
        $Model->data($Data)->save();
        AdminLogRewrite($this->Menu.'修改成功，ID：'.I('AdminID'));
        $this->success($this->Menu.'修改成功');
    }


    //删除记录
    public function del()
    {
        $DelID=I('post.DelID',array());
        if(empty($DelID))
        {
            $ID=I('get.id','0');
            $DelID=array();
            $DelID[]=$ID;
        }
        if(!empty($DelID))
        {
            $DelIDStr=implode(',',$DelID);
            $Model=M('Admin');
            $Where=array();
            $Where['AdminID']=array('in',$DelIDStr);
            $Model->where($Where)->delete();
            AdminLogRewrite($this->Menu.'记录删除，ID：'.$DelIDStr);
        }
        $this->success($this->Menu.'记录删除');
    }

    public function sort()
    {
        dump(I());
        $Sort=I('Sort',array());
        if(!empty($Sort))
        {
            $Model=M('Admin');
            foreach($Sort as $key=>$val)
            {
                $Data=array();
                $Data['AdminSort']=$val;
                $Where=array();
                $Where['AdminID']=$key;
                $Model->data($Data)->where($Where)->save();
            }
            $ListID=array_keys($Sort);
            $ListID=implode(',',$ListID);
            AdminLogRewrite($this->Menu.'记录排序，ID：'.$ListID);
        }
        $this->success($this->Menu.'记录排序更新成功');
    }


    private function GetRoleList()
    {
        $Model=M('auth_group');
        $Where=array();
        $Where['status']=1;
        return $Model->field('id,title')->where($Where)->order('sort asc,id asc')->select();
    }

    private function AdminAddRole($ID)
    {
        $RoleID=I('post.RoleID',array());
        if(!empty($RoleID))
        {
            $RoleModel=M('auth_group_access');
            foreach($RoleID as $key=>$val)
            {
                $Data=array();
                $Data['uid']=$ID;
                $Data['group_id']=$val;
                $RoleModel->data($Data)->add();
            }
        }
    }

    private function AdminDelRole($ID)
    {
        $RoleModel=M('auth_group_access');
        $Where=array();
        $Where['uid']=$ID;
        $RoleModel->where($Where)->delete();
    }
}