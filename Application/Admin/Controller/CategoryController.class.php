<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
	
	protected $_map             =   array();  // 字段映射定义
	/**
	 * 显示添加分类界面
	 */
	public function add() {
		// 快速实例化用户自定义模型
		$cate = D ( 'Category' );
		// 查询所有一级分类信息，并保存到数组data中
		$data = $cate->where ( 'cid=0' )->select ();
		// 将data分配给模板中
		$this->assign ( 'data', $data );
		// 显示模板
		$this->display ( );
	}
	
	/**
	 * 添加分类信息
	 */
	public function addOk() {
		// 判断是否点击submit
		if (isset ( $_POST ['submit'] )) {
			// 实例化自定义模型
			$cate = D ( 'Category' );
			// 自动创建
			$cate->create ();
			$data = $cate->find(3);
			dump($data);
			// 录入数据
/* 			echo $cate->name;
			echo $cate->content;
			echo $cate->cid; */
/*  			if ($cate->add ()) {
				$this->success ( '录入成功', 'add' );
			} else {
				$this->error ( '录入失败', 'add' );
			}  */
		}
	}		
	/**
	 * 操作,管理分类
	 */
/*  	public function test(){
		$User = M('Category');
$date=$User->create(); //创建User数据对象
var_dump($date);
$User->status = 1; // 设置默认的用户状态
$User->create_time = time(); // 设置用户的创建时间
var_dump($date); 

	}  */
}