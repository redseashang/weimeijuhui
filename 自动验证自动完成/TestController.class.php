<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller
{
	public function index()
	{
		$this->display('Index/index');
	}

	public function addsave()
	{
		$Model=D('test');
		$Result=$Model->FieldCheck();
		if(!empty($Result))
		{
			$this->error($Result);
		}
	}

	public function addsave5()
	{
		$Model=D('test');
		if(!$Model->create())
		{
			$this->error($Model->getError());
		}
		$Model->add();
	}

	public function addsave4()
	{
		$Model=M('test');
		$Rule=array(
			array('think_time','time',1,'function'),
			//array('think_name','think_pwd',1,'field'),
			array('think_name','',3,'ignore'),
		);

		$Model->auto($Rule)->create();
		$Model->add();
	}


	public function addsave3()
	{
		$Model=D('test');
		$Model->AddSave();
	}

	public function addsave2()
	{
		$Model=D('test');
		$Model->create();
		//$Model->add();
		$Model->where(array('think_id'=>27))->save();
	}
}
?>