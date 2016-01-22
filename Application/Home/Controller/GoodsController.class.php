<?php

namespace Home\Controller;

use Think\Controller;

class GoodsController extends Controller {
	public function add(){
		echo "hello world!";

	}
	
	public function _empty($name){
		echo "方法不存在";
	}
}

?>