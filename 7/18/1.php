<?php
    mysql_connect('localhost','root','456123');
    mysql_select_db('c1');
    $nid =(int)$_GET['nid'];
    $sql = "delete from news where nid = $nid";
    #delete from news where nid=1 or 1;
    echo $sql;
    mysql_query($sql);