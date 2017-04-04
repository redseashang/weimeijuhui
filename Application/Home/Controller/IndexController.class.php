<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

//phpinfo();
        $Model=M('admin');

        //$this->M('admin');

        $Where=array();
        //$Where['AdminID']='11';
        //$Where['AdminID']=array('gt',15);
        $WhereStr='AdminID > 15';
        $Info=$Model->where($WhereStr)->select();
        dump($Info);

        echo '<hr>';
        dump(__USER__);

        $Model=M();
        $List=$Model->table('test.'.C('DB_PREFIX').'admin')->select();
        dump($List);

        dump($_GET);
        print_r($_GET);

        $List=$Model->table('__ADMIN__')->select();
        echo '===============================';
        dump($List);
        echo '================================';



        echo '------------------------<hr>--------------------------';
        $Model=D('admin');
        $List=$Model->select();
        dump($List);
        $Model->GetList();

        echo '<hr><hr><hr>';
        $Model=M('admin');
        $List=$Model->field('a.AdminID,a.AdminName,m.MemberID,m.MemberName')->table('__ADMIN__ as a,__MEMBER__ as m')->where('a.AdminID>15')->limit(10)->select();
        dump($List);

        echo '<br>';
        $List=$Model->alias('a')->join('left join __MEMBER__ m on a.AdminID=m.MemberID')->select();
        dump($Model->getLastSql());
        dump($List);

        echo '<br>';
        //添加数据
        $Data=array();
        $Data['AdminName']='AAA';
        $Data['AdminPwd']='123456';
        //$InsertID=$Model->data($Data)->add();
//        dump($Model->getLastSql());
//        dump($InsertID);
//        dump($Model->getLastInsID());
        //$Model->add($Data);

        echo '<hr>';
        $Data=array();
        $Data['AdminID']='11';
        $Data['AdminName']='BBB';
        $Data['AdminPwd']='654321';
        $Info=$Model->data($Data)->save();
        dump($Info);

        echo '<hr>';
        $Model->find();
        $Data=$Model->data();
        //dump($List);
        dump($Data);

        echo '<hr><hr>';
        $List=$Model->field('AdminID,AdminName')->where('AdminID>43')->union('select AdminID,AdminName from __MEMBER__ where AdminID>19')->select();
        dump($Model->getLastSql());
        dump($List);

        echo '<hr><hr>';

        $Str='';
        for($i=0;$i<100;$i++)
        {
            $Str.=$i;
        }
        $Arr=array();
        $Arr['AdminName']='abcabc';
        $Arr['AdminPwd']='5555555';
        $Arr['AdminContent']=$Str;
        //$Model->lock(true)->where('AdminID=11')->save($Arr);
        dump($Model->getLastSql());
        echo '<hr><hr><hr><hr>';
        $Info=$Model->cache(true)->where('AdminID=11')->find();
        dump($Info);
        echo '<hr>';


        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
}