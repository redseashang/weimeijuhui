<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 9:47
 */
namespace Admin\Controller;
use Think\Controller;
class CodecheckController extends  Controller
{
    public function logincheck()
    {
        $Verify = new \Think\Verify();
        $Verify->imageW='75';
        $Verify->imageH='35';
        $Verify->fontSize='14';
        $Verify->length=3;
        $Verify->useCurve=false;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}
