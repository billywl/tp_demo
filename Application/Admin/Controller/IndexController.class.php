<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		//判断username的session是否存在
		if(!session('?username')){
			$this->redirect('Admin/login');
		}else{
			$this->display();
			
		}
		
	}
	
	
	
	/**
	 * 操作,显示主页面
	 */
/* 	public function index(){
		$this->display();
	} */
	
	/**
	 * 操作,显示top页面
	 */
/* 	public function top(){
		$this->display();
	} */
}