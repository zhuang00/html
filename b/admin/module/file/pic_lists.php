<?php
function module_pic_lists($back)
{
	global $smarty;
	$list_public = get_file_list('images');
	$smarty->assign('list_public',$list_public);
	$list_editor = get_folder_list('images/editor/*');
	$smarty->assign('list_editor',$list_editor);
	
	$k = 0;
	$lists = array();
	$list = $back;
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = get_folder_list('images/'.$list[$i]['cha_code']);
		if(count($arr))
		{
			$k ++;
			$lists[$k]['channel'] = $list[$i]['cha_code'];
			$lists[$k]['name'] = $list[$i]['cha_name'];
			$lists[$k]['folder'] = $arr;
		}
	}
	$smarty->assign('list_json',json_encode($list_public));
	$smarty->assign('lists',$lists);
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
function get_folder_list($dir)
{
	$arr = array();
	$list = glob($dir . '/*');
	for($i = 0; $i < count($list); $i ++)
	{
		if(is_dir($list[$i]))
		{
			$name = substr($list[$i],strlen($dir) + 1);
			$path_str = rawurlencode($list[$i]);
			$arr = array_merge($arr,array(array('name'=>$name,'path_str'=>$path_str)));
		}
	}
	return $arr;
}
//新秀
?>