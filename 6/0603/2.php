<?php
    header("Content-type:text/html;charset=utf-8");
    require"../../class/Model.class.php"; //数据库操作模型
    require "../../functions.php";//函数库
    include "../../class/Debug.class.php";//加载调试类
    C(include "../../config.inc.php");//加载基本配置项
    $db = M('stu');
    if($db->update(array(
        "sid"=>1,
       'sname'=>"李小四",
        "birthday"=>"2012-2-15",
        "cid"=>3,
        "afadf"=>4566
    ))){
        echo"更新成功";
    }else{
        echo "更新失败";
    }