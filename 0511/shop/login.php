<?php
    include "common.php";
    $action = $_GET['action'];

    switch($action){
        case"out":
            setcookie("user","",time()-3600);
            setcookie("admin","",time()-3600);
            header("location:index.php");
            break;
        case"show":
            include "tpl/admin/loginshow.html";
            break;
        case"login":
            $username=isset($_POST['username'])?$_POST['username']:null;
            $password=isset($_POST['password'])?$_POST['password']:null;
            if(!$username || !$password){
                echo"<h1>账号信息不正确</h1>
                  <script>
                  setTimeout(function(){location.href='login.php?action=show'},3000);
                  </script>";
                exit;
            }
            echo"<pre>";
           foreach($userDb as $user){
               //用户名与密码与数据库的匹配
               if($user['username']==$username && $user['password']==$password){
                   //登录成功时记录COOKIE
                   if($username=='admin'){
                       setcookie("admin", 1);
                   }
                   setcookie("user",1);
                   setcookie("username",$username);//记录用户名

                   header("location:admin.php");exit;
               }
           }

                echo"<h1>用户不存在</h1>
                  <script>
                  setTimeout(function(){location.href='login.php?action=show'},3000);
                  </script>";
                exit;

    }

?>