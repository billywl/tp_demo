<?php
return array(
	//'配置项'=>'配置值'
		// URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		'URL_MODEL'             =>  1,      
		
		// PATHINFO模式下，各参数之间的分割符号
		'URL_PATHINFO_DEPR'     =>  '/',	
		
		// 默认false 表示URL(参数部分)区分大小写 true则表示不区分大小写
		'URL_CASE_INSENSITIVE'  =>  true,   
		
		// 默认错误跳转对应的模板文件
		'TMPL_ACTION_ERROR'     =>  THINK_PATH.'Tpl/dispatch_jump.tpl', 
		// 默认成功跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   =>  THINK_PATH.'Tpl/dispatch_jump.tpl', 
		
		// 默认模板文件后缀
		'TMPL_TEMPLATE_SUFFIX'  =>  '.html',    
		 
		// 模板引擎普通标签做分隔符
		'TMPL_L_DELIM'          =>  '{',        
		// 模板引擎普通标签右分隔符
		'TMPL_R_DELIM'          =>  '}',           
		
		'DB_TYPE'               => 'mysql',     // 数据库类型
		'DB_HOST'               => 'localhost', // 服务器地址
		'DB_NAME'               => 'demo', // 数据库名
		'DB_USER'               => 'root',      // 用户名
		'DB_PWD'                => 'root',    // 密码
		'DB_PORT'               => '3306',      // 端口
		'DB_PREFIX'             => 'tp_',    		// 数据库表前缀
		'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
		
		'SHOW_PAGE_TRACE' =>true,	//开启页面Trace
		//'LOAD_EXT_FILE'=>'user,user1', //添加扩展配置文件
);