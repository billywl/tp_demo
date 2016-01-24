<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function login(){

		$this->display(); 
	}
	public function checklogin(){
		if(!isset($_POST['btnOK'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$count=D('Admin')->where("username='$username' and password='$password'" )->count();
			if ($count>0){
				//记录管理员的用户名
				session('username',$username);
				$this->success('登录成功','../Index/index');
			}else{
				$this->error('登录失败','../Admin/login');
				
			}
		}
	}
}