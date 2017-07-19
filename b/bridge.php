<?php
include('include/common.php');
	
$obj = new config();
$config = $obj->get_config();
	
$material = get_material('','bridge');
$result = https_request(S_SERVER_URL,$material);
//echo $result;
$arr = json_decode($result,true);
	
initial_simple($arr);
	
//新秀
?>