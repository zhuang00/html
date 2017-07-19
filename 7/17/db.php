<?php
    header("Content-type:text/html;charset=utf-8");
    mysql_connect('localhost','root','456123');
    mysql_query("set names utf8");
    mysql_select_db("c1");
    function p($data){
        echo"<pre>".print_r($data,true)."</pre>";
    }
    function query($sql){
        $result = mysql_query($sql);
        if(!$result){
            exit(mysql_error());
        }
        $rows=array();
        while($row =mysql_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }
    function exe($sql){
        if(!mysql_query($sql)){
            exit(mysql_error());
        }
        $insert_id = mysql_insert_id();
        return $insert_id?$insert_id:mysql_affected_rows();
    }