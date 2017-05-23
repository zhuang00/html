<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   if(!is_file("db.php")){
       file_put_contents("db.php","<?php \nreturn array();\n?>");
   }
   $db =include "db.php";
   $db[]=$_POST;
   if(file_put_contents("db.php","<?php \nreturn ".var_export($db,true).";\n?>")){
//       echo "{username:'{$_POST['username']}',msg:'ok'}";
      echo  json_encode(array("error"=>0,"username"=>$_POST['username'],"regtime"=>time()));
   }else{
       echo 0;
   }
?>