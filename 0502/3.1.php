<?php

include "../functions.php";
var_dump(ini_get("register_globals"));

// print_r($_GET);
//print_r($login);
exit;
if($_POST['uname']=='admin'&& $_POST['pwd']==123){
	$login =true;
}

if($login){
	echo "登录成功";
}else{
	echo "登录失败";
}

?>