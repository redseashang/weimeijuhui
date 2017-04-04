<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 11:36
 */
namespace Admin\Model;
use Think\Model;
class AuthRuleModel extends Model
{
    protected $_auto=array(
        array('time','time',1,'function'),
    );
    public function GetTypeList($State=1,$WParam=array(),$PID='0',$Str='',$Seat='')
    {
        $Where=array();
        $Where=$WParam;
        $Where['parentid']=array('in',$PID);//$PID;
        $List=$this->field('id,title,parentid,typenode,name,sort,status')->where($Where)->order('sort asc,id asc')->select();
        //dump($this->getLastSql());
        if(empty($List))
        {
            return $Str;
        }else{
            foreach($List as $key => $val)
            {
                $Temp='';
                if($State==1)
                {
                    $Selected=$val['id']==$WParam['PID']?'selected':'';
                    $Temp='<option value="'.$val['id'].'" '.$Selected.'>'.$Seat.$val['title'].'</option>';
                    $Str.=$this->GetTypeList($State,$WParam,$val['id'],$Temp,$Seat.'　　');
                }else if($State==2){
                    $val['temptitle']=$Seat.$val['title'];
                    $Str[]=$val;
                    if(empty($WParam['NoDG']))
                    {
                        $Str = $this->GetTypeList($State, $WParam, $val['id'], $Str, $Seat . '　　');
                    }
                }
            }
            return $Str;
        }
    }
    //保存数据
    public function AddSave()
    {
        //添加数据
        //$_POST['time']=time();
        $this->create();
        $InsertID=$this->add();
        //查询父级typepath数据
        $ParentID=I('post.parentid','0');
        $Info=$this->field('typepath')->where(array('id'=>$ParentID))->find();
        $Data=array();
        $TypePath=$Info['typepath'].$InsertID.'|';
        $Data['typepath']=$TypePath;
        $Data['typenode']=substr_count($TypePath,'|');
        $this->data($Data)->where(array('id'=>$InsertID))->save();
    }
    //获取父级ID
    public function GetParentID($Key)
    {
        if(empty($Key))
        {
            return '0';
        }
        $Where=array();
        $Where['title']=array('like','%'.$Key.'%');
        $List=$this->field('parentid')->where($Where)->order('sort asc,id asc')->select();
        //dump($List);
        if(empty($List))
        {
            return '0';
        }
        $Arr=array();
        foreach($List as $key=>$val)
        {
            $Arr[]=$val['parentid'];
        }
        if(!empty($Arr))
        {
            $Arr=array_unique($Arr);
        }
        //dump($Arr);
        return implode(',',$Arr);
    }

    public function GetInfo($ID)
    {
        $Where=array();
        $Where['id']=$ID;
        return $this->where($Where)->find();
    }
    //验证分类数据
    public function CheckTypeData($ID,$PID)
    {
        dump($ID.'---'.$PID);
        //当前记录不可以做父级
        if($ID==$PID)
        {
            return 1;
        }
        //获取当前记录的所有子集ID
        $NotPIDList=$this->GetTypeList(2,'',$ID);
        dump($NotPIDList);
        $NotPid=array();
        if(!empty($NotPIDList))
        {
            foreach($NotPIDList as $key=>$val)
            {
                //if($val['parentid']!='0')
                //{
                    $NotPid[$val['id']]=$val['id'];
                //}
            }
        }
        dump($NotPid);
//exit();
        //$OldParentID=$this->GetCrrentParentID($ID);
        //dump($OldParentID);
//        if(empty($OldParentID['parentid']) && in_array($PID,$NotPid))
//        {
//            unset($NotPid[$PID]);
//        }
        //dump($NotPid);

        if(in_array($PID,$NotPid))
        {
            return 1;
        }
        //exit();
        $Node=$this->GetCrrentTypePath($PID);
        $NodeStr=empty($PID)?$ID.'|':$Node['typepath'].$ID.'|';
        $Data=array();
        $Data['parentid']=$PID;
        $Data['typepath']=$NodeStr;
        $Data['typenode']=substr_count($NodeStr,'|');
        $Where=array();
        $Where['id']=$ID;
        $this->data($Data)->where($Where)->save();
        //dump($this->getLastSql());
        if(!empty($NotPIDList))
        {
            foreach($NotPIDList as $key=>$val)
            {
                if($val['id']!=$ID)
                {
                    $SubPID=$this->GetCrrentTypePath($val['parentid']);
                    $SubNode=$SubPID['typepath'].$val['id'].'|';
                    $Data=array();
                    $Data['typepath']=$SubNode;
                    $Data['typenode']=substr_count($SubNode,'|');
                    $Where=array();
                    $Where['id']=$val['id'];
                    $this->data($Data)->where($Where)->save();
                }
            }
        }
        //dump($NotPIDList);
        //exit();
    }
    //获取当前ID的原始父级ID
    private function GetCrrentParentID($ID)
    {
        $Where=array();
        $Where['id']=$ID;
        $State=$this->field('parentid')->where($Where)->find();
        if(empty($State)){return '0';}
        return $State;
    }
    //获取当前ID的TypePath
    private function GetCrrentTypePath($ID)
    {
        $Where=array();
        $Where['id']=$ID;
        return $this->field('typepath')->where($Where)->find();
    }

}