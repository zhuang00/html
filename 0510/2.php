<?php
  include "../functions.php";
  p($_GET);
  if(!is_file("db.php")){
      file_put_contents("db.php","<?php \nreturn array();?>");
  }
  $db=include "db.php";//打开数据库
  $data=array();
  $data['title']=$_GET['title'];//标题
  $data['body']=$_GET['body'];//正文
  $db[]=$data;
  //写入数据
  if(file_put_contents("db.php","<?php \n return ".var_export($db,true).";\n?>")){
    echo 1;
  }else{
      echo 0;
}
?>