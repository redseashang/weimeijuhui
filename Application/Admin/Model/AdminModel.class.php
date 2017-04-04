<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 9:36
 */
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model
{
    //自动完成
    protected $_auto=array(
        array('AdminTime','time','1','function'),
        //array('AdminPwd','','3','ignore'),
    );
/*    protected $_validate=array(
        array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('AdminName','require','请填写您的用户名',0,'',1),
        array('AdminName','','您的用户名已被注册',0,'unique',1),
        array('AdminName','6,20','您的用户名长度请在6-20个字符之间',0,'length','1'),
        array('AdminPwd','AdminAffirmPwd','您的两次密码输入有误','1','confirm','3'),
    );*/
}