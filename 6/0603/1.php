<?php

header("Content-type:text/html;charset=utf-8");
require"../../class/Model.class.php"; //数据库操作模型
require "../../functions.php";//函数库
include "../../class/Debug.class.php";//加载调试类
C(include "../../config.inc.php");//加载基本配置项
$db = M("stu");
////p($db->query('desc stu'));
//$db->where("sid>2")->limit("2,3")->order("sid desc")->select();
//$db->all();
//$data = $db->limit(3)->all();
//p($data);
$db->where("sid=3")->select();
$db->select();
Debug::show();