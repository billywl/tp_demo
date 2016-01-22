<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
	public function add(){
		$list[2]=1;
		$list['name']=2;
		$list[]=1;
		$list[]=2;
		$list[]=1;
		$list[]=2;
		$list[]=1;
		$list[]=2;
		$list[]=1;
		$list[]=2;
		$list[]=1;
		$list[]=2;
		$this->assign('list',$list);
		$this->display();
		
	}
}