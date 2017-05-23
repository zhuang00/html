<?php
header("Content-type:text/html;charset=utf8");
$file = isset($_GET['file'])?$_GET['file']:false;
if($file===false){

	echo"非法请求";exit;
}
$file= urldecode($file); //反转编码
if(!is_file($file)){

	echo"<script>alert('文件不存在');window.location.assign('1.html');</script>";exit;
}

// echo trim(strrchr("a.ab.php","."),".");
// echo substr("a.b.c.php",strrpos("a.b.c.php", ".")+1);

$info = pathinfo("$file");
if(strtolower($info['extension'])=='php'){

	highlight_string(file_get_contents($file));
}else{

	header("location:".$file);
}