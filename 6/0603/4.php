<?php
header("Content-type:text/html;charset=utf-8");
require"../../class/Model.class.php"; //数据库操作模型
require "../../functions.php";//函数库
include "../../class/Debug.class.php";//加载调试类
C(include "../../config.inc.php");//加载基本配置项
$db= M("stu");
$data = array(
    "sname"=>"李六",
    "birthday"=>"1993-4-2",
    "cid"=>2,
    "sex"=>1
);
if($db->insert($data)){
    echo"插入成功";
}else{
    echo"插入失败";
}