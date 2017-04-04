<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/31
 * Time: 10:33
 */
namespace Admin\Controller;
use Think\Controller;
class RoleController extends CommonController
{
    private $Menu='角色';
    public function index()
    {
        $Key=I('get.Key','');
        $Model=M('auth_group');
        $Where=array();
        if(!empty($Key))
        {
            $Where['title']=array('like','%'.$Key.'%');
        }
        $List=$Model->where($Where)->order('sort asc,id asc')->select();
        $this->assign('List',$List);
        //获取2，3级
        $this->display();
    }

    public function add()
    {
        $RuleModel=D('auth_rule');
        $Where=array();
        $Where['status']='1';
        $RuleList=$RuleModel->GetTypeList(2,$Where);

        $this->assign('RuleList',$RuleList);
        $this->display();
    }

    public function addsave()
    {
        //dump(I());
        $Rules=I('post.RuleID',array());
        $_POST['rules']=implode(',',$Rules);
        $Model=M('auth_group');
        $Model->create();
        $ID=$Model->add();
        AdminLogRewrite($this->Menu.'数据添加成功，ID：'.$ID);
        $this->success($this->Menu.'数据添加成功，ID：'.$ID);
    }

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
            $Model=M('auth_group');
            $Where=array();
            $Where['id']=array('in',$DelIDStr);
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
            $Model=M('auth_group');
            foreach($Sort as $key=>$val)
            {
                $Data=array();
                $Data['sort']=$val;
                $Where=array();
                $Where['id']=$key;
                $Model->data($Data)->where($Where)->save();
            }
            $ListID=array_keys($Sort);
            $ListID=implode(',',$ListID);
            AdminLogRewrite($this->Menu.'记录排序，ID：'.$ListID);
        }
        $this->success($this->Menu.'记录排序更新成功');
    }

    public function edit()
    {
        $ID=I('get.id','0');
        $RulesArr=array();

        $Model=M('auth_group');
        $Where=array();
        $Where['id']=$ID;
        $Info=$Model->where($Where)->find();
        if(!empty($Info['rules']))
        {
            $RulesArr=explode(',',$Info['rules']);
        }

        $RuleModel=D('auth_rule');
        $Where=array();
        $Where['status']='1';
        $RuleList=$RuleModel->GetTypeList(2,$Where);

        $this->assign('RuleList',$RuleList);

        $this->assign('Info',$Info);
        $this->assign('RulesArr',$RulesArr);
        $this->display();
    }

    public function editsave()
    {
        $RuleID=I('post.RuleID',array());
        $_POST['rules']=implode(',',$RuleID);
        $Model=M('auth_group');
        $Model->create();
        $Model->save();
        AdminLogRewrite($this->Menu.'记录信息更新成功，ID：'.I('id'));
        $this->success($this->Menu.'记录信息更新成功');
    }
}