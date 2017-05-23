<?php

include "../functions.php";
// p($_SERVER);
$url=md5($_SERVER['REQUEST_URI']);
//$url=$_SERVER['REQUEST_URI'];

$cacheTime = 5;
$cacheFile = "/var/www/html/cache/".$url;
// echo $cacheFile;

if(is_file($cacheFile) && filemtime($cacheFile)+$cacheTime>time()){
	echo "1111111<br/>";
	echo file_get_contents($cacheFile);
	exit;

}
$f='houdunwang';
$s='';
$start = microtime(true);
 for($i=0; $i<2000000;$i++){
	$s+=$i;
 	//2万件 600万留言 199ID的商品的前10条留言
 }
 ob_start();//开启缓存大门
 //ob_end_clean();
  echo $f;
  echo"<br>runtime:".(microtime(true)-$start);
 $content = ob_get_contents();
 //file_put_contents("cache/".$url,$content); //有问题
  // ob_end_clean(); 
  file_put_contents("/var/www/html/cache/".$url,$content);