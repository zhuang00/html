<?php
include "../../functions.php";
include "./libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir="tpl";//模板目录
$smarty->compile_dir="compile";//编译目录
$smarty->cache_dir="cache";//缓存目录
$smarty->register_block("nocache","nocache_func",false);
function nocache_func($params,$content,&$smarty){
    return $content;
}
?>