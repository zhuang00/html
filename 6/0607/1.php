<?php
    include"common.php";
    $db = mysql_connect("localhost","root","456123");
    mysql_select_db("houdunwang");
    mysql_query("SET NAMES UTF8");
    $result = mysql_query("select * from stu limit 6");
    $data =array();
    while($d =mysql_fetch_assoc($result)){
        $data[]=$d;
    }
    $smarty->assign("data",$data);
    $smarty->display("list.html");