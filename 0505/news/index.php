<?php
//单入口					  门童
//文章发表 删除 修改 查找	  后厨
//内容展示对象：让用户查看文章  服务员
// fopen("aaa",'w');exit;
include "../../functions.php";
function __autoload($className) {
    //echo $className;exit;
   include "control/" .ucfirst($className). ".class.php"; //加载类文件

    //echo "control/".$className.".class.php";
}

//index对象 文章显示 news对象 文章CURD 增、删、改、查
$control = isset($_GET['control']) ? $_GET['control'] : "index";//控制器对象
$action = isset($_GET['action']) ? $_GET['action'] : "index";//动作
define("CONTROL", $control);//定义控制器常量
//echo $control;
$control = $control . "Control";//添加类后缀Control
$obj = new $control; //实例化对象
$obj->$action();    //执行方法
?>