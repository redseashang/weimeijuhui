<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 10:52
 */
namespace Admin\Controller;
use Think\Controller;
class RuleController extends CommonController
{
    private $Menu='栏目';
    public function index()
    {
        $Key=I('get.Key','');
        $Model=D('auth_rule');
        $GetParentID=$Model->GetParentID($Key);
        //$List=$Model->order('sort asc,id asc')->select();
        $Where=array();
        $Where['title']=array('like','%'.$Key.'%');
        if(!empty($GetParentID))
        {
            $Where['NoDG']='1';
        }
        //echo $GetParentID;
        $List=$Model->GetTypeList(2,$Where,$GetParentID);
        //dump($List);
        $this->assign('List',$List);
        $this->display();
    }
    public function add()
    {
        $Model=D('auth_rule');
        $Where=array();
        //$Where['status']=1;
        $TypeList=$Model->GetTypeList();

        $this->assign('TypeList',$TypeList);
        $this->assign('ModelName',MODULE_NAME);
        $this->display();
    }
    public function addsave()
    {
        $Model=D('auth_rule');
        $Model->AddSave();
        AdminLogRewrite($this->Menu.'数据添加成功');
        $this->success('数据添加成功');
    }
    //修改界面调用
    public function edit()
    {
        $ID=I('get.id','0');
        $Model=D('auth_rule');
        $Info=$Model->GetInfo($ID);//获取数据

        $Where=array();
        //$Where['status']=1;
        $Where['PID']=$Info['parentid'];
        $TypeList=$Model->GetTypeList('1',$Where);

        $this->assign('Info',$Info);
        $this->assign('TypeList',$TypeList);
        $this->display();
    }
    //修改保存
    public function editsave()
    {
        $ID=I('post.id','0');
        $PID=I('post.parentid','0');
        $Model=D('auth_rule');
        //验证分类数据
        $State=$Model->CheckTypeData($ID,$PID);
        //exit();
        if($State==1)
        {
            $this->error('当前栏目不可选择自己或小于自己的子分类');
        }
        unset($_POST['parentid']);
        $Model->create();
        $Model->save();
        AdminLogRewrite($this->Menu.'数据更新成功');
        $this->success('此记录更新成功。');
    }
    //删除数据
    public function del()
    {
        $DelID=I('post.DelID',array());
        if(empty($DelID))
        {
            $DelID=array();
            $ID=I('get.id','0');
            $DelID[]=$ID;
        }
        if(!empty($DelID))
        {
            $Temp=array();
            $DelIDStr=implode(',',$DelID);
            $Model=M('auth_rule');
            $Where=array();
            $Where['id']=array('in',$DelIDStr);
            $List=$Model->field('typepath')->where($Where)->select();
            if(!empty($List))
            {
                foreach($List as $key =>$val)
                {
                    $Temp[]='typepath like "'.$val['typepath'].'%"';
                }
            }
            $QueryStr=implode(' Or ',$Temp);
            //dump($QueryStr);
            $Where=array();
            $Where['id']=array('in',$DelIDStr);
            $Where['_string']=$QueryStr;
            $Where['_logic'] = 'Or';
            $Model->where($Where)->delete();
            //dump($Model->getLastSql());
        }
        AdminLogRewrite($this->Menu.'据删除成功');
        $this->success('此记录删除成功',U('index'));
    }
    //排序
    public function sort()
    {
        $SortArr=I('post.Sort',array());
        if(!empty($SortArr))
        {
            $Model=M('auth_rule');
            foreach($SortArr as $key => $val)
            {
                $Data=array();
                $Data['sort']=$val;
                $Where=array();
                $Where['id']=$key;
                $Model->data($Data)->where($Where)->save();
            }
        }
        AdminLogRewrite($this->Menu.'数据排序成功');
        $this->success('当前记录的序列更新成功。');
    }
}