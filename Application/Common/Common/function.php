<?php
// 无限级分类,生成树状结构
function getTree($data, $cid = 0) {
	static $tree = array ();
	foreach ( $data as $key => $value ) {
		if ($value ['cid'] == $cid) {
			$tree [] = $value;
			unset ( $data [$key] );
			getTree ( $data, $value ['id'] );
		}
	}
	return $tree;
}