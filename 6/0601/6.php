<?php
header("Content-type:text/html;charset=utf-8");
 require"../../class/Model.class.php"; //数据库操作模型
 require "../../functions.php";//函数库
 C(include "../../config.inc.php");//加载基本配置项
 $db = M("stu");
 // p($db->query("SELECT * FROM stu"));
 if($db->exe("INSERT INTO stu (sname,birthday,sex) values('郭大城','1988-2-23',1)")){
 	echo "插入成功";
 }else{
 	echo "插入失败";
 }
//find where field select();
//$db->find(3) ##返回主键为3的记录
//$db->field("sname,birthday")->select(); ##返回 字段只有sname,birthday的记录