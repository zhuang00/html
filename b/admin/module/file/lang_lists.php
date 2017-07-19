<?php
function module_lang_lists($back)
{
	global $smarty;
	$smarty->assign('lang_list',$back);
	$smarty->assign('S_LANG',S_LANG);
	$smarty->assign('pack',get_folder_list('languages'));
}
function get_folder_list($dir)
{
	$arr = array();
	$list = glob($dir . '/*');
	for($i = 0; $i < count($list); $i ++)
	{
		if(is_dir($list[$i]))
		{
			$name = substr($list[$i],strlen($dir) + 1);
			$arr = array_merge($arr,array(array('name'=>$name)));
		}
	}
	return $arr;
}
//新秀
?>