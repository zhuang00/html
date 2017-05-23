<?php
    session_start();
    if(isset($_SESSION['login'])){
        echo"已经登录";
        echo "<a href='3.2.php'>退出</a>";
        exit;
    }
    setcookie(session_name(),session_id(),time()+3600,"/");    header("Content-type:text/html;charset=utf-8");
    $user=array("username"=>"admin","password"=>123);
    if($_POST['username']==$user['username']&& $_POST['password']==$user['password']) {

        $_SESSION['login'] = 1;
        echo "<h1>登录成功</h1>";
    }
?>