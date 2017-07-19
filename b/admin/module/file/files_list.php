<?php
function module_files_list()
{
	global $smarty;
	$list = get_file_list('resource');
	$smarty->assign('list_json',json_encode($list));
	$smarty->assign('list',$list);
}
function get_file_list($dir)
{
	$arr = array();
	$list = glob($dir . '/*');
	for($i = 0; $i < count($list); $i ++)
	{
		if(!is_dir($list[$i]))
		{
			$arr = array_merge($arr,array(array('name'=>$list[$i])));
		}
	}
	return $arr;
}
//新秀
?>