<?php
    include "db.php";
    $cid=intval($_GET['cid']);
    if(!$cid){
        exit("非法操作");
    }
    //关闭自动提交
    exe("SET AUTOCOMMIT=0");
    //删除栏目
    $sql="DELETE FROM category WHERE cid =$cid";
   if(exe($sql)){
       if(exe("DELETE FROM news WHERE cid=$cid")){
           exe("commit");
            echo "<h1>删除成功</h1>";
       }else{
           //回滚
            exe("rollback");
            error("删除失败");
       }
   }else{
       //回滚
       exe("rollback");
       error("删除失败");
   }
