<?php
        $db = mysql_connect("localhost", "root", "456123");
        mysql_select_db("houdunwang");
        mysql_query("SET NAMES UTF8");
        //总条数
        $result = mysql_query("select count(*) as total from stu");
        $data = mysql_fetch_assoc($result);
        include "../../class/Page.class.php";//加载分页类
        $page = new Page($data['total'],3);

        echo"<br/>";
        $limit = $page->limit();
        $result = mysql_query("select * from stu $limit");
        $data = array();
        while ($d = mysql_fetch_assoc($result)) {
            echo "<li>{$d['sname']}</li>";
        }
        echo $page->show();