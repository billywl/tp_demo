<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
	

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
/* 	public function admin(){
		$cate=D('Category');
		$data=$cate->select();
		//生成树状结构
		$date=getTree($data);
		$this->assign('data',$data);

		$this->display(); // 输出模板

	}   */
	public function admin(){
/* 		$cate=D('Category');

		$count=$cate->field('id')->count();
		$page       = new \Think\Page($count,3);

// 		$page->setConfig('header','个会员');
		$show       = $page->show();// 分页显示输出
		$list = $cate->limit($page->firstRow.','.$page->listRows)->select();
		
		$this->assign('list',$list);// 赋值数据集
		$this->assign('show',$show);// 赋值分页页脚输出
		$this->display(); // 输出模板  */
		
 		//需要实例化基类(或者未字段映射)
 				
 		$cate=M('Category');
   		$list = $cate->field(true)->page($_GET['p'],3)->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $cate->field(true)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('show',$show);// 赋值分页输出
		$this->display(); // 输出模板 
	
	}
	
	
	/**
	 * 操作,批量删除
	 */
	public function deleteAll(){
		//判断是否点击删除按钮
		if(isset($_POST['deleteSubmit'])){
			//接收要删除的id
			$id=$_POST['id'];
			//将要删除的id拼接为字符串
			$str=implode(',', $id);
			//实例化并删除
			if(D('Category')->delete($str)){
				$this->success('删除成功','admin');		
			}else{
				$this->error('删除失败','admin');		
				
			}
		}	
	}
	
	/**
	 * 显示修改页面
	 */
	public function edit() {
		// 要修改的id
		$id = $_GET ['id'];
		// 要修改的数据保存到数组row中
		$row = D ( 'Category' )->find ( $id );
		// 查询所有一级分类信息保存到数组data中
		$data = D ( 'Category' )->where ( 'cid=0' )->select ();
		// 为模板分配数据
		$this->assign ( 'row', $row );
		$this->assign ( 'data', $data );
	
		$this->display ( 'edit' );
	}
	
	
	/**
	 * 修改功能
	 */
	public function editOk() {
		if (isset ( $_POST ['submit'] )) {
			$cate = D ( "Category" );
			$cate->create ();
			if ($cate->save ()) {
				$this->success ( '修改成功', 'admin' );
			} else {
				$this->error ( '修改失败', 'admin' );
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}