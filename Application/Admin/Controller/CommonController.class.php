<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 11:06
 */
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public $youde;
    //ThinkPHP所提供的构造方法
    public function _initialize()
    {
        $this->AdminLoginCheck();
    }

    public function AdminLoginCheck()
    {
        $AdminID=session('AdminID');
        $AdmidName=session('AdminName');
        $AdminTime=session('AdminTime');
        $AdminRandPwd=session('AdminRandPwd');

        if(empty($AdminID))
        {
            $this->redirect('Login/index');
        }
        if(time()-$AdminTime>C('AdminLoginTimeCheck'))
        {
            $this->error('您已登录超时，请重新登录',U('Login/index'));
        }
        $Model=M('admin');
        $Where=array();
        $Where['AdminID']=$AdminID;
        $Where['AdminName']=$AdmidName;
        $Where['AdminRandPwd']=$AdminRandPwd;
        $State=$Model->field('count(*) as c')->where($Where)->find();
        if($State['c']!=1)
        {
            $this->error('您的账户发生异常，请重新登录',U('Login/index'));
        }//exit();
        session('AdminTime',time());
        $this->chuansong();
        $this->hqqx();

    }
    //获取当前账号权限
    protected function hqqx()
    {
        $URLL=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        echo $URLL;
        if($URLL=='Admin/Index/index')
        {
            $this->ersan('91');
            return;
        }
        $qxid=session('AdminID');
        $Model=M('admin');
        $Where=array();
        $Where['AdminID']=$qxid;
        $Listaaa=$Model->where($Where)->find();
        if(!$Listaaa['AdminState']==1)
        {
            $this->error('您的账号已被禁用',U('Login/index'));
        }
        //第二个表
        $Model=M('auth_group_access');
        $Where=array();
        $Where['uid']=$qxid;
        $List=$Model->where($Where)->select();
        //第三个表
        $Model=M('auth_group');
        $List2=array();
        foreach($List as $key=>$val)
        {
            $Where=array();
            $Where['id']=$val['group_id'];
            $Where['status']=1;
            $List2[]=$Model->where($Where)->select();
        }
        //第四个表
        $Model=M('auth_rule');
        $List3=array();
        foreach($List2 as $key=>$val)
        {
            $List3[]=$val['0']['rules'];
        }
        $List3=implode(',',$List3);
        $Where=array();
        $Where['id']=array('in',$List3);
        $List3=$Model->where($Where)->select();
        //获取对应所有的子集
        $ZiList=array();
        foreach($List3 as $key=>$val)
        {
            $Where=array();
            $Where['typepath']=array('like',$val['typepath'].'%');
            $ZiList[]=$Model->where($Where)->select();
        }
        //获取所有层级的权限权限
        $AllList=array();
        foreach($ZiList as $key=>$val)
        {
            foreach ($val as $key=>$val)
            {
                $fuid=str_replace('|',',',$val['typepath']);
                $Where=array();
                $Where['id']=array('in',$fuid);
                $AllList[]=$Model->where($Where)->select();
            }
        }
        //获取所有id
        $AllID=array();
        foreach($AllList as $key1=>$val1)
        {
            foreach($val1 as $key=>$val)
            {
                $AllID[]=$val['id'];
            }
        }
        $Allid=implode(',',$AllID);
        $Allid=explode(',',$Allid);
        $AllidArr=array_unique($Allid);
        //获取所有id对应权限的url
        $UrlArr=array();
        foreach($AllidArr as $key=>$val)
        {
            $Where=array();
            $Where['id']=$val;
            $UrlStr=$Model->field('name')->where($Where)->select();
            $UrlArr[]=$UrlStr['0']['name'];
        }
        //判断当前用户是否有权限操作当前功能
        if($Listaaa['AdminAllRole']!='All')
        {
           if(!in_array($URLL,$UrlArr))
            {
            $this->error('您的账号暂无权限');
             }
            $this->ersan($this->leftlist());
        }else{
            $this->sansi($this->leftlist());
        }

    }
    protected function leftlist()
    {
        $URLL=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        $Model=M('auth_rule');
        $Where=array();
        $Where['name']=$URLL;
        $UrlStr=$Model->field('typepath')->where($Where)->find();
        $id=intval($UrlStr['typepath']);
        return $id;
    }

    protected function PageShow($Page,$Count)
    {
        $CurrentPage=I('get.p','1');
        $Page->rollPage=5;
        $Page->lastSuffix=false;
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('count',$Count);
        $this->assign('totalPages',$Page->totalPages);
        $this->assign('CurrentPage',$CurrentPage);
    }
    private function chuansong()
    {
        $Model=M('auth_rule');
        $Where=array();
        $Where['parentid']='0';
        $List=$Model->where($Where)->select();
        $this->assign('Listtou',$List);
    }
    protected function ersan($ID)
    {
        $qxid=session('AdminID');
        $Model=M('admin');
        $Where=array();
        $Where['AdminID']=$qxid;
        $Listaaa=$Model->where($Where)->find();
        //第二个表
        $Model=M('auth_group_access');
        $Where=array();
        $Where['uid']=$qxid;
        $List=$Model->where($Where)->select();
        //第三个表
        $Model=M('auth_group');
        $List2=array();
        foreach($List as $key=>$val)
        {
            $Where=array();
            $Where['id']=$val['group_id'];
            $Where['status']=1;
            $aa=$Model->where($Where)->find();
            $List2[]=$aa['rules'];
        }
        $Allid=implode(',',$List2);

        $Model=M('auth_rule');
        $Where=array();
        $Where['parentid']=$ID;
        $Twoji=$Model->where($Where)->select();
        $threeji=array();
        foreach($Twoji as $key=>$value) {
            $Where = array();
            $Where['parentid'] = $value['id'];
            $Where['status'] = '1';
            $Where['id']=array('in',$Allid);
            $aaa= $Model->where($Where)->select();
            if(!empty($aaa))
            {
                $threeji[$value['title']] =$aaa;
            }
        }
        $this->assign('threeji',$threeji);
        $URLLL=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        $i=0;
        foreach($threeji as $key=>$val)
        {
            foreach($val as $key2=>$xal2)
            {
                if($URLLL==$xal2['name'])
                {
                    return;
                }
            }
            if($i=='0')
            {
                $hei=$xal2['name'];
            }
            $i++;
        }
       $this->redirect($hei);
    }
    public function sansi($ID)
    {
        $Model=M('auth_rule');
        $Where=array();
        $Where['parentid']=$ID;
        $Twoji=$Model->where($Where)->select();
        $threeji=array();
        foreach($Twoji as $key=>$value) {
            $Where = array();
            $Where['parentid'] = $value['id'];
            $Where['status'] = '1';
            $aaa= $Model->where($Where)->select();
            if(!empty($aaa))
            {
                $threeji[$value['title']] =$aaa;
            }
        }
        $this->assign('threeji',$threeji);
    }
}