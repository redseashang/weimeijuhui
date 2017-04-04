<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 9:45
 */
namespace Home\Model;
use Think\Model;
class AdminModel extends Model
{
    public function GetList()
    {
        dump(__USER__);
        $List=$this->table('__ADMIN__')->select();
        dump($List);
        echo 123;
    }
}