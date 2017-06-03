<?php
    header("Content-type:text/html;charset=utf-8");
    require"../../class/Model.class.php"; //数据库操作模型
    require "../../functions.php";//函数库
    include "../../class/Debug.class.php";//加载调试类
    C(include "../../config.inc.php");//加载基本配置项
    $db= M("stu");
    $d = $db->where("sid=3")->delete();
    var_dump($d);
    Debug::show();
