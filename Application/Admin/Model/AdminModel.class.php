<?php

namespace Admin\Model;

use Think\Model;

class AdminModel extends Model {
	protected $field=array(
			'id',
			'username',
			'password',
			'_autoinc' => true,
			'_pk' =>'id',
			
	);
	protected $_map             =   array(
		
	);  
	


}

?>