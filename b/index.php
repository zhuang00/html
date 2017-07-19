<?php
include('include/common.php');
include_once('include/function.php');
include('index/basic.func.php');
echo dirname(__FILE__);
$obj = new config();
$config = $obj->get_config();
	
main();
	
//新秀
?>