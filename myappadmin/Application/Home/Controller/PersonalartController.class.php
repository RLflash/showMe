<?php
namespace Home\Controller;
use Think\Controller;
class PersonalartController extends BaseController {
	//个人中心发布文章
    public function saveart(){
        $arttit=$_POST["arttit"];
        $artcont=$_POST["cont"];
        $artautor="天南第一剑";
        $artsendt=date("Y-m-d H:i:s");

       	$User = M("Posts"); // 实例化User对象
		$data['title'] = $arttit;
		$data['content'] = $artcont;
		$data['autor'] = $artautor;
		$data['sendtime'] = $artsendt;
		$User->add($data);
		
    }
    
}