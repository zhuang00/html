<?php
function module_tpl_list()
{
	global $smarty;
	$tpl = get_tpl_sheet();
	$smarty->assign('tpl',$tpl);
}
function get_tpl_sheet()
{
	$arr = array();
	$dir = 'templates';
	$list = glob($dir . '/*');
	for($i = 0; $i < count($list); $i ++)
	{
		if(is_dir($list[$i]))
		{
			$name = substr($list[$i],strlen($dir) + 1);
			$text = file_get_contents($list[$i] . '/readme.txt');
			$arr = array_merge($arr,array(array('name'=>$name,'text'=>$text)));
		}
	}
	return $arr;
}
//新秀
?>