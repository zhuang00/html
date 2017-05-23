<?php
	include './preg/functions.php';
	/*$str="abc";
	preg_match("/.?/",$str,$arr);
	p($arr);试试
*/
	$str="taobao.com..http://www.taobao.com";
	// print_r($str);
	echo preg_replace("/(http:\/\/)?(www\.)?taobao\.com/","<a href='http://360buy.com'>360buy.com</a>",$str);