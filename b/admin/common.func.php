<?php
function set_smarty()
{
	$template_dir = S_TPL_PATH . 'admin/';
	if(!file_exists($template_dir))
	{
		$template_dir = 'templates/default/admin/';
	}
	
	global $smarty;
	$smarty = new Smarty;
	$smarty->template_dir = $template_dir;
	$smarty->compile_dir = 'admin/compile/';
	$smarty->cache_dir = 'admin/cache/';
}
function initial($config_file_name = '')
{
	global $global,$smarty,$lang;
	
	$material = get_material($config_file_name);
	$result = https_request(S_SERVER_URL,$material);
	//echo $result;
	$arr = json_decode($result,true);
	
	if(is_array($arr))
	{
		foreach($arr as $key => $value)
		{
			if($key != 'lang' && $key != 'callback' && $key != 'result')
			{
				$smarty->assign($key,$value);
			}
		}
		initial_simple($arr);
	}else{
		error_info();
	}
	
	$smarty->assign('lang',$lang);
	$smarty->assign('S_FRONT_URL',S_FRONT_URL);
	$smarty->assign('S_TPL_PATH',S_FRONT_URL . S_TPL_PATH);
	$smarty->assign('S_LANG',S_LANG);
	$smarty->assign('S_MULTILINGUAL',S_MULTILINGUAL);
	
	$smarty->registerPlugin('function','url','url');
}
function edit_config($nane,$value)
{
	$text = file_get_contents('include/config.php');
	$a = "\$config['$nane'] = ";
	$p = strpos($text,$a);
	if($p !== false)
	{
		$val = substr($text,$p + strlen($a));
		if(substr($val,0,1) == "'")
		{
			$a = $a . "'";
			$b = "'";
			$val = substr($val,1);
		}else{
			$b = ';';
		}
		$p = strpos($val,$b);
		if($p !== false)
		{
			$val = substr($val,0,$p);
		}
	}
	
	$text = str_replace($a . $val . $b,$a . $value . $b,$text);
	file_put_contents('include/config.php',$text);
}
//新秀
?>