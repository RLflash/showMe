<?php
namespace Home\Controller;
use Think\Controller;

class SignController extends BaseController {
	//获取所有文章
    public function getartcont(){
       	$User = M("Posts"); // 实例化User对象	
		$artdata=$User->select();
		$this->ajaxReturn($artdata, 'JSON');
    }
    //获取文章详细内容
     public function getartdetail(){
       	$User = M("Posts"); // 实例化User对象	
		$artdata=$User->select();
		$this->ajaxReturn($artdata, 'JSON');
    }

}