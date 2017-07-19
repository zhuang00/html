<?php
function module_show_set()
{
	global $smarty;
	$arr = array();
	$list = glob(S_TPL_PATH . 'config/index/*');
	for($i = 0; $i < count($list); $i ++)
	{
		get_tpl_info($list[$i],$arr);
	}
	ksort($arr);
	$smarty->assign('show',$arr);
}
function get_tpl_info($path,&$arr)
{
	global $global;
	static $j = 0;
	include($path);
	$page_name = $tpl_config[0]['page_name'];
	$page_index = $tpl_config[0]['page_index'];;
	for($i = 1; $i < count($tpl_config); $i ++)
	{
		$name = $tpl_config[$i]['name'];
		$module = $tpl_config[$i]['module'];
		
		if(substr($module,0,1) != '*')
		{
			$checked_1 = 'checked';
			$checked_0 = '';
		}else{
			$checked_1 = '';
			$checked_0 = 'checked';
			$module = str_replace('*','',$module);
		}
		$file_name = substr(get_file_name($path,'/'),0,-4);
		$num = intval($page_index) * 100  + ($j++);
		$arr[$num]['name'] = $page_name . $name;
		$arr[$num]['value'] = $file_name . '-' . $module;
		$arr[$num]['yes'] = $checked_1;
		$arr[$num]['no'] = $checked_0;
	}
	return($arr);
}
//新秀
?>