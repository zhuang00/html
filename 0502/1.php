<?php

$url =fopen("http://www.baidu.com", "r");
// echo fread($url,2222);

if(!ini_get("allow_url_fopen")){
	echo"当前环境没有开启远程文件访问，请打开PHP.INI中的allow_url_fopen";
	exit;
}
//采集APP
$cont = file_get_contents("http://www.baidu.com");
preg_match('/<title>(.*)<\/title>/',$cont,$arr);
echo "<pre>";
print_r($arr);