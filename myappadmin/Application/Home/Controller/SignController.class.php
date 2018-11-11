<?php
namespace Home\Controller;
use Think\Controller;

class SignController extends BaseController {
	//获取所有文章
    public function login(){
    	 
    	$jw=$this->setjwtStr();
//     	$User = M("Posts"); // 实例化User对象	
//		$artdata=$User->select();
		$this->ajaxReturn($jw, 'JSON');
    }
   

}