<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 9:25
 */
//管理员日志写入
function AdminLogRewrite($Title,$Content='')
{
    $AdminID=session('AdminID');
    $Model=M('log');
    $Data=array();
    $Data['LogAdminID']=$AdminID;
    $Data['LogController']=CONTROLLER_NAME;
    $Data['LogModel']=ACTION_NAME;
    $Data['LogTitle']=$Title;
    $Data['LogContent']=$Content;
    $Data['LogTime']=time();
    $Model->data($Data)->add();
}

