<?php
//    header()
    include "db.php";
    $action = isset($_GET['a'])?$_GET['a']:false;

    $action = htmlspecialchars(strip_tags($action));
    switch($action){
        case "add_show":
            include "tpl/user_add.html";
        break;
        case "add":
            $uname=$_POST['uname'];
            $money=$_POST['money'];
            if(exe("call add_user('$uname',$money)")){
                echo "添加成功";
            }else{
                echo "失败";
            }
            break;
        default:
            $user = query("select * from user");
            include "tpl/user_list.html";
    }