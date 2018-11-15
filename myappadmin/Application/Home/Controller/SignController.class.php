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
			
			session_start();
			
			$jw=$this->setjwtStr($getuser[id]);
			
			$returndata['status']=1;
			$returndata['tokenstr']=$jw;
			$this->ajaxReturn($returndata, 'JSON');
		}else{
			header('HTTP/1.1 401 Unauthorized'); 	
		}
    }
   //退出
   public function signout(){
   		$tokenstr=$_GET["token"];
   		
 		$this->distroylogin($tokenstr);
   }

}