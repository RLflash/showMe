<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	 public function __construct(){
	 	header("Access-Control-Allow-Origin: *");      
	 }
}