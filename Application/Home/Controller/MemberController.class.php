<?php
namespace Home\Controller;

use Think\Controller;

class MemberController extends Controller {
	/**
	 * 登录功能
	 */
	public function login(){
    $array['name']    =    'thinkphp';
    $array['email']   =    'liu21st@gmail.com';
    $array['phone']   =    '12335678';
		$this->assign($array);
		$this->display();
	}
	
	/**
	 * 登录检查
	 */
	public function checkLogin(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=='admin'&&$password=='admin'){
			$this->success('登录成功','test');
		}else{
			//为模版中的waitsecond标记赋值,控制等待时间
			$this->redirect('test');
			$this->assign('waitSecond',5);
			$this->error('登录失败','login');
		}
	}
	
	public function test(){
		echo "test";
		$this->redirect('test2');
	}
	public function test2(){
		echo "test2方法";
	}
	public function _empty($name){
		echo "方法不存在";
	}
}