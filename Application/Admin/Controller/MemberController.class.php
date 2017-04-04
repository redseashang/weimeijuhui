<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/4
 * Time: 9:10
 */
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController
{
    public function index()
    {
        $this->display('Role/index');
    }
}