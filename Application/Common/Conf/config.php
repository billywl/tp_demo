<?php
return array(
	//'配置项'=>'配置值'
		'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		'URL_PATHINFO_DEPR'     =>  '/',	// PATHINFO模式下，各参数之间的分割符号
		'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL(参数部分)区分大小写 true则表示不区分大小写
		'TMPL_ACTION_ERROR'     =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
);