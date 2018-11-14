<?php
namespace Home\Controller;
use Think\Controller;
use \Lcobucci\JWT\Parser;
use \Lcobucci\JWT\Builder;
use \Lcobucci\JWT\Signer\Hmac\Sha256;
include "./vendor/autoload.php";
class BaseController extends Controller {
	public function __construct(){	
		header("Content-Type:text/html; charset=utf-8");
	 	header("Access-Control-Allow-Origin: *");
	}
	
	public function setjwtStr($idstr){
		$randomstr=$idstr.time().rand();
		dump($randomstr);
		$builder = new Builder();
		$signer  = new Sha256();
		$secret = "suspn@)!*";
		//设置header和payload，以下的字段都可以自定义
		$builder->setIssuer("wsub","suspn1.com") //发布者
		        ->setAudience("suspn.com") //接收者
		        ->setId("abc", true) //对当前token设置的标识
		        ->setIssuedAt(time()) //token创建时间
		        ->setExpiration(time() + 24*60*60) //过期时间
		        ->setNotBefore(time()) //当前时间在这个时间前，token不能使用
		        ->set('userflag', $randomstr); //自定义数据
		
		//设置签名
		$builder->sign($signer, $secret);
		//获取加密后的token，转为字符串
		$token = (string)$builder->getToken();
		 $parse = (new Parser())->parse($token);
		  var_dump($parse->getClaims());
		return $token;
	} 	
	public function getjwtStatus($tokenStr){
		
		$signer  = new Sha256();
		$secret = "suspn@)!*";
		//获取token
		$token = $tokenStr;
		
		if (empty($token)) {
//		    return "登陆失败！";	
			header('HTTP/1.1 401 Unauthorized'); 	
 			exit();	  
		}	
		
		try {
		    //解析token
		    $parse = (new Parser())->parse($token);
		    //验证token合法性
		    if (!$parse->verify($signer, $secret)) {		       
//		        return "权限不够！";
				header('HTTP/1.1 401 Unauthorized'); 	
 				exit();
		    }
		    //验证是否已经过期
		    if ($parse->isExpired()) {
//		         return "登陆已过期！！";
 				 header('HTTP/1.1 401 Unauthorized'); 	
 				 exit();		  
		    }	    
		} catch (Exception $e) {
		    var_dump($e->getMessage());
		    
		}
	}	
}