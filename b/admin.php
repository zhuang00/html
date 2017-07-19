<?php
$re_config['S_PROJECT'] = 'admin';
$re_config['S_URL_PREFIX'] = 'admin.php?/';
	
include('include/common.php');
include('admin/basic.func.php');
	
$obj = new config($re_config);
$config = $obj->get_config();
	
main();
	
//新秀
?>