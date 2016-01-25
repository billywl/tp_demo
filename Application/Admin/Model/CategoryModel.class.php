<?php

namespace Admin\Model;

use Think\Model;

class CategoryModel extends Model {
/* 	    // 数据表名（不包含表前缀）默认与表明相同可以不定义
    protected $tableName        =   'Category'; */
	// 字段映射定义
	protected $_map             =   array(
			'cate_id' => 'id',
			'cate_name' => 'name',
			'cate_content' => 'content',
			'cate_cid' => 'cid'
	);  
	public function page($each){

	
	}

}

?>