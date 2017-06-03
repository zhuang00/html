<?php

header("Content-type:text/html;charset=utf-8");
require"../../class/Model.class.php"; //数据库操作模型
require "../../functions.php";//函数库
C(include "../../config.inc.php");//加载基本配置项
$db = M("stu");
//p($db->query('desc stu'));
$data =$db->where("sid>2")->select();
p($data);