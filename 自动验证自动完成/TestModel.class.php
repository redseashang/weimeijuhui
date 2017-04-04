<?php
namespace Home\Model;
use Think\Model;

class TestModel extends Model
{
/*	protected $_validate=array(
		array('think_name','require','请填写您的用户名123',1),
		array('think_pwd','email','您的邮箱格式输入有误'),
		//array('think_pwdaffirm','url','请填写您的确认密码',2),
		array('think_pwd','think_pwdaffirm','您的两次密码输入不一致','0','confirm'),
		array('think_mobile','/^1[3|5|6|7|8]\d{9}$/','您手机号格式输入有误',0,'regex'),
		array('think_picpath','CheckValue','您的图片路径输入有误',0,'function'),
		array('think_picpath','CheckValue2','您的图片路径输入还是有误',0,'callback'),
		//array('think_picpath','789','您的图片路径又输入错误了',0,'equal'),
		array('think_picpath','000','您的图片路径还是错误的',0,'notequal'),
		//array('think_age','1,100,2,3,4,5','您所输入的年龄有误',0,'in'),
		//array('think_age','1,100,2,3,4,5','您所输入的年龄有误',0,'notin'),
		//array('think_age','1,100','您的年龄段请在1-100之间',0,'between'),
		array('think_age','1,100','您的年龄段请在1-100之间',0,'notbetween'),
		array('think_pwd','10,30','您的密码长度请在10到30个字符之间',0,'length'),
		array('think_time','2017-3-1,2017-3-31','您所输入时间范围有误',1,'expire'),//对比的系统时间
		//array('think_ip','192.168.0.108','您所请求的IP已被禁用',1,'ip_allow'),
		array('think_ip','192.168.0.108','您所请求的IP已被禁用',1,'ip_deny'),
		array('think_name','','您所输入的用户名已被注册',1,'unique',1),
	);*/

	public function FieldCheck()
	{
		$Validate=array(
			array('think_name','require','请填写您的用户名123',1),
			array('think_pwd','email','您的邮箱格式输入有误'),
			//array('think_pwdaffirm','url','请填写您的确认密码',2),
			array('think_pwd','think_pwdaffirm','您的两次密码输入不一致','0','confirm'),
			array('think_mobile','/^1[3|5|6|7|8]\d{9}$/','您手机号格式输入有误',0,'regex'),
			array('think_picpath','CheckValue','您的图片路径输入有误',0,'function'),
			array('think_picpath','CheckValue2','您的图片路径输入还是有误',0,'callback'),
			//array('think_picpath','789','您的图片路径又输入错误了',0,'equal'),
			array('think_picpath','000','您的图片路径还是错误的',0,'notequal'),
			//array('think_age','1,100,2,3,4,5','您所输入的年龄有误',0,'in'),
			//array('think_age','1,100,2,3,4,5','您所输入的年龄有误',0,'notin'),
			//array('think_age','1,100','您的年龄段请在1-100之间',0,'between'),
			array('think_age','1,100','您的年龄段请在1-100之间',0,'notbetween'),
			array('think_pwd','10,30','您的密码长度请在10到30个字符之间',0,'length'),
			array('think_time','2017-3-1,2017-3-31','您所输入时间范围有误',1,'expire'),//对比的系统时间
			//array('think_ip','192.168.0.108','您所请求的IP已被禁用',1,'ip_allow'),
			array('think_ip','192.168.0.108','您所请求的IP已被禁用',1,'ip_deny'),
			array('think_name','','您所输入的用户名已被注册',1,'unique',1),
		);
		if(!$this->validate($Validate)->create())
		{
			return $this->getError();
			exit();
		}
		$this->add();
	}

	protected function CheckValue2()
	{
		$Val=I('post.think_picpath','');
		if($Val=='456')
		{
			return false;
		}
		return true;
	}

	/*protected $_auto=array(
		array('think_time','time',1,'function'),
		array('think_age','TestAge',1,'callback'),
		//array('think_name','think_pwd',1,'field'),
		array('think_name','99999',3,'ignore'),
	);*/

	protected function TestAge()
	{
		return '200';
	}

	public function AddSave()
	{
		$Rule=array(
			array('think_time','time',1,'function'),
			array('think_age','TestAge',1,'callback'),
			//array('think_name','think_pwd',1,'field'),
			array('think_name','',3,'ignore'),
		);

		$this->auto($Rule)->create();
		//$this->add();
		$this->where('think_id=28')->save();
	}
}
?>