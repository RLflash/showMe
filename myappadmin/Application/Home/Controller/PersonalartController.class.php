<?php
namespace Home\Controller;
use Think\Controller;
class PersonalartController extends Controller {
    public function saveart(){
      
       $cont=I('post.cont');
       
       $returnData = array(
       		'age'=> $cont,
       );
       dump($cont);
       $this->ajaxReturn($returnData, 'JSON');
      
    }
}