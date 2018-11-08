<?php
namespace Home\Controller;
use Think\Controller;
use \Lcobucci\JWT\Parser;
use \Lcobucci\JWT\Builder;
use \Lcobucci\JWT\Signer\Hmac\Sha256;
//var_dump(file_exists('./vendor/autoload.php'));die;
include "./vendor/autoload.php";
class IndexController extends Controller {
	
	//获取文章详情
     public function getdetail(){
    	header("Access-Control-Allow-Origin: *");
//  	if($_GET['id']==2){
//  		Session_start(); 
//  		$_SESSION['CREATED'] = time();
//  		$_SESSION['username'] = 2;  
//  	};
//		if(!isset($_SESSION['username'])||(time() - $_SESSION['CREATED'] > 5)){
//			session_destroy();
//			echo "请登录";
//		}else{
//			echo "已登录";
//		};
		//unset($_SESSION['b']);
		//$sessionId = session_id();//得到sessionid 
		//$_SESSION["b"]=session_id();
		
		//var_dump($_SESSION["b"]);
		
	//	exit();
		$builder = new Builder();
		$signer  = new Sha256();
		
		$secret = "suspn@)!*";
		
		//设置header和payload，以下的字段都可以自定义
		$builder->setIssuer("wsub","suspn1.com") //发布者
		        ->setAudience("suspn.com") //接收者
		        ->setId("abc", true) //对当前token设置的标识
		        ->setIssuedAt(time()) //token创建时间
		        ->setExpiration(time() + 3) //过期时间
		        ->setNotBefore(time() + 1) //当前时间在这个时间前，token不能使用
		        ->set('jtiuid', 30061); //自定义数据
		
		//设置签名
		$builder->sign($signer, $secret);
		//获取加密后的token，转为字符串
		$token = (string)$builder->getToken();
		var_dump($token);

		$signer  = new Sha256();
		$secret = "suspn@)!*";
		sleep(2);
		//获取token
		$token = $token;
		
		if (!$token) {
		     var_dump('Invalid token');
		}
		
		try {
		    //解析token
		    $parse = (new Parser())->parse($token);
		    //验证token合法性
		    if (!$parse->verify($signer, $secret)) {
		         var_dump('Invalid token');
		    }
		
		    //验证是否已经过期
		    if ($parse->isExpired()) {
		         var_dump('Already expired');
		    }
		
		    //获取数据
		    dump($parse->getClaims());
		
		} catch (Exception $e) {
		    var_dump($e->getMessage());
		    
		}

		
    	exit;
    	$id=$_GET['id'];
       	$User = M("Posts"); // 实例化User对象
       	$data=array(
       		'id'=>$id
       	);	
       	 	
       	$artdetail = $User->where($data)->select();
      
		$this->ajaxReturn($artdetail, 'JSON');
    }
}