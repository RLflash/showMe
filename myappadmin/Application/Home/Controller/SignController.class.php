<?php
namespace Home\Controller;
use Think\Controller;

class SignController extends BaseController {
	//登录
    public function login(){
    	$name=$_POST["name"];
    	$pass=$_POST["pass"];
    	$datauser=array('names'=>$name,'passwords'=>$pass);

    	$User = M("users"); // 实例化User对象	
     	$getuser=$User->where($datauser)->find();
     	$returndata=array();
		if($getuser){
			//登录成功
			$jw=$this->setjwtStr();
			$returndata['status']=1;
			$returndata['tokenstr']=$jw;
			$this->ajaxReturn($returndata, 'JSON');
		}else{
			$returndata['status']=0;
			$this->ajaxReturn($returndata, 'JSON');
		}
    }
   

}