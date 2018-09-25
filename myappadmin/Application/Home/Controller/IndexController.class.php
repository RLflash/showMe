<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//获取文章详情
     public function getdetail(){
    	header("Access-Control-Allow-Origin: *");
    	$id=$_GET['id'];
       	$User = M("Posts"); // 实例化User对象
       	$data=array(
       		'id'=>$id
       	);	
       	 	
       	$artdetail = $User->where($data)->select();
      
		$this->ajaxReturn($artdetail, 'JSON');
    }
}