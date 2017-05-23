<?php

include "../functions.php";
// p($_GET);
// p($_POST);exit;

if(!is_file("db.php")){
	file_put_contents("db.php", "<?php \nreturn array();?>");
}
$db=include"db.php";
$data=array();
$data['title']=$_POST['title'];
$data['body']=$_POST['body'];
$db[]=$data;
if(file_put_contents("db.php","<?php \n return ".var_export($db,true).";\n?>")){
	echo 1;
}else{
	echo 0;
}