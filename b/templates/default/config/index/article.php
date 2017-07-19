<?php
$tpl_config = array(
	array('page_name'=>'资讯中心','page_index'=>4),
	array('name'=>'头部','module'=>'header'),
	array('name'=>'焦点图片','module'=>'focus'),
	array('name'=>'菜单','module'=>'article_tree','parameter'=>array('channel'=>$global['channel'])),
	array('name'=>'主体','module'=>'article_main'),
	array('name'=>'评论','module'=>'comment'),
	array('name'=>'底部','module'=>'footer'),
	array('name'=>'在线客服','module'=>'service')
);
//新秀
?>