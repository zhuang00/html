<?php
header("Content-type:text/html;charset=utf-8");
 include "../functions.php";
 $db =include "db.php";
 $data = array();
 if($_FILES['up']['error']==0){
	 
 	if(is_uploaded_file($_FILES['up']['tmp_name'])){
 		$name = $_FILES['up']['name'];
 		$toFile='/var/www/html/upload/'.time().mt_rand(1,1000).strrchr($name,'.');
 		// echo $toFile;exit;
 		if(move_uploaded_file($_FILES['up']['tmp_name'],$toFile)){

 			$data['name']=$name; //原文件名
 			$data['time']=time();
 			$data['size']=$_FILES['up']['size'];
 			$data['path']=$toFile;
 			$db[]=$data;

 			file_put_contents("db.php","<?php \nreturn ".var_export($db,true).";\n?>");
 			echo"<script>alert('上传成功');window.location.assign('6.2.php');</script>";
 		}
 	}
}
?>
