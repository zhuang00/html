<?php
$db = new mysqli('localhost','root','456123','c1');
//错误编码
if($db->connect_errno){
    //输出错误信息
    exit($db->connect_error);
}
$db->query('set names utf8');