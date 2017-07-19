<?php
header("Content-type:text/html;charset=utf-8");
mysql_connect("localhost","root","456123");
mysql_select_db("c1");
mysql_query("set names utf8");
    //有结果集的SQL select desc show create table
    function query($sql){
        $result=mysql_query($sql);
        $rows = array();
        while($row =mysql_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }
    //执行语句update delete insert
    function exe($sql){
        if(mysql_query($sql)){
            return mysql_affected_rows();
        }else{
            return false;
        }
    }
    function error($msg){
        echo "<h2 style='border:solid 1px #f00;'>$msg</h2>";
    }