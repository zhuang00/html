<?php
    include "common.php";
    $smarty->caching=true;//开启缓存控制
    $smarty->cache_lifetime=3600;//缓存的时间
    session_start();
    $_SESSION['user']='张学友';
    //如果缓存失效,查数据库
    if(!$smarty->is_cached("4.html",$_SERVER['REQUEST_URI'])) {
        echo '<h1>这次没有走缓存</h1>';
        $db = mysql_connect("localhost", "root", "456123");
        mysql_select_db("houdunwang");
        mysql_query("SET NAMES UTF8");
        include "../../class/Page.class.php";//加载分页类
        $result = mysql_query("select count(*) as total from stu");
        $data = mysql_fetch_assoc($result);//总记录条数
        $page = new Page($data['total'],3);
        $limit = $page->limit();
        $result = mysql_query("select * from stu $limit");
        $data = array();
        while ($d = mysql_fetch_assoc($result)) {
            $data[] = $d;
        }
        $smarty->assign("data", $data);
        $smarty->assign("page",$page->show());//分配分页字符串
    }
    $smarty->display("4.html",$_SERVER['REQUEST_URI']);