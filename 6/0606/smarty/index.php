<?php
    session_start();
    $_SESSION['uname']='houdunwang';
    function toUpper($data){
        return "<i style='color:#f00;'>$data</i>";
    }
    function substr_d($data,$start,$num){
        return substr($data,$start,$num);
    }
    define('APP',"后盾远程班");

    $smarty->assign("webname",array('name'=>array('tel'=>6485057,'email'=>'houdun@163.com'),"url"=>'houdunwang.com'));
    $smarty->display("index.html");