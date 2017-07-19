<?php
function module_pic_list()
{
	global $global,$smarty;
	$dir_path = url_decode($global['path']);
	$list = get_file_list($dir_path);
	$smarty->assign('list_json',json_encode($list));
	$smarty->assign('list',$list);
	$smarty->assign('dir_path',$dir_path);
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