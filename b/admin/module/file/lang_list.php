<?php
function module_lang_list()
{
	global $global,$smarty;
	$arr = array();
	$k = 0;
	$dir = 'languages/'.$global['name'];	
	$lang_files = get_lang_files($arr,$k,$dir);
	$smarty->assign('lang_files',$lang_files);
}
function get_lang_files(&$arr,&$k,&$dir)
{
	if(is_dir($dir))
	{
		$list = glob($dir . '/*');
		for($i = 0; $i < count($list); $i ++)
		{
			if(!is_dir($list[$i]))
			{
				$arr[$k]['path'] = $list[$i];
				$arr[$k]['path_str'] = rawurlencode($list[$i]);
				$k ++;
			}else{
				$arr = get_lang_files($arr,$k,$list[$i]);
			}
		}
	}
	return $arr;
}
//新秀
?>