<?php


namespace Home\Controller;

use Think\Controller;

class EmptyController extends Controller {
	public function _empty($name){
		echo "访问的路径不存在!";
	}
}