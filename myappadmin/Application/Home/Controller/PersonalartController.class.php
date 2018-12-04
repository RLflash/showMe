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
    //个人文章管理获取
    public function getownart(){
    	$User = M("Posts"); // 实例化User对象
//  	$userid=$_SESSION['userid'];
		$userid=2;
    	$artdata=$User->where('user_id='.$userid)->select();
		$this->ajaxReturn($artdata, 'JSON');
    }
    //个人文章修改保存
    public function saveedit(){
    	$User = M("Posts"); // 实例化User对象
    	$arttit=$_POST["arttit"];
        $artcont=$_POST["cont"];
        $artid=$_POST["artid"];
        
		$userid=2;
		
		$data['title'] = $arttit;
		$data['content'] = $artcont;
		$conditiondata['user_id']=$userid;
		$conditiondata['id']=$artid;
		$updatemsg=$User->where($conditiondata)->save($data); // 根据条件更新记录
		if($updatemsg){
			$updatestatus["status"]=1;
			$updatestatus["mes"]="更新成功！";
			$this->ajaxReturn($updatestatus, 'JSON');
		}else{
			$updatestatus["status"]=0;
			$updatestatus["mes"]="更新失败！";
			$this->ajaxReturn($updatestatus, 'JSON');
		}
		
    }
    //个人文章删除
    public function deleart(){
    	$User = M("Posts"); // 实例化User对象
 		$artid=$_POST["artid"];
		$delteopera=$User->where('id='.$artid)->delete();
		$deletstatus=array();
		if($delteopera){
			$deletstatus["status"]=1;
			$deletstatus["mes"]="删除成功！";
			$this->ajaxReturn($deletstatus, 'JSON');
		}else{
			$deletstatus["status"]=0;
			$deletstatus["mes"]="删除失败！";
			$this->ajaxReturn($deletstatus, 'JSON');
		}
		
    }
    
}