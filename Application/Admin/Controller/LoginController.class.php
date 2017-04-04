<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 9:31
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }
    //验证用户登录的信息
    public function check()
    {
        $AdminCode=I('post.AdminCode','');
        $verify = new \Think\Verify();
        $State=$verify->check($AdminCode);
        if(!$State)
        {
            $this->error('您的验证码输入有误');
        }
        $AdminName=I('post.AdminName');
        $AdminPwd=I('post.AdminPwd');
        dump($AdminPwd);
        $AdminPwd=md5($AdminPwd.md5(C('AdminKey')));
        dump($AdminPwd);
        //exit();

        $Model=M('admin');
        $Where=array();
        $Where['AdminName']=$AdminName;
        $Where['AdminPwd']=$AdminPwd;
        $Where['AdminState']=1;
        $Info=$Model->field('count(*) as c,AdminID')->where($Where)->find();
        //dump($Model->getLastSql());
        //dump($Info);
        if($Info['c']==1)
        {
            $AdminRandPwd=md5(mt_rand(1000,9999).C('AdminKey'));
            session('AdminID',$Info['AdminID']);
            session('AdminName',$AdminName);
            session('AdminRandPwd',$AdminRandPwd);
            session('AdminTime',time());
            $this->SaveAdminRandPwd($Info['AdminID'],$AdminRandPwd);
            AdminLogRewrite($AdminName.'管理员登录成功。');
            $this->success($AdminName.' 您好，欢迎您的登录。',U('/Admin'));
        }else{
            $this->error('您的用户名或密码输入有误');
        }
    }

    public function SaveAdminRandPwd($AdminID,$Pwd)
    {
        $Model=M('admin');
        $Where=array();
        $Where['AdminID']=$AdminID;
        $Data=array();
        $Data['AdminRandPwd']=$Pwd;
        $Model->data($Data)->where($Where)->save();
    }
}