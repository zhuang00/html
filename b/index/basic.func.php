<?php
function main()
{
	global $global,$smarty;
	set_global();
	set_more_global();
	
	if(S_HALF_STATIC)
	{
		if($global['url'] == '')
		{
			if(S_FLASH != 1)
			{
				$path = '/' . S_URL_SUFFIX;
			}else{
				$path = '/flash.html';
			}
		}else{
			$path = $global['url'];
		}
		$path = 'html' . $path;
		if(substr($path,-1) == '/')
		{
			$path .= S_URL_SUFFIX;
		}
		if(file_exists($path))
		{
			include($path);
			exit();
		}else{
			ob_start();
		}
	}
	if(S_FLASH && $_SERVER['REQUEST_URI'] == S_ROOT)
	{
		$path = 'index/flash.php';
	}else{
		controller();
	}
}
function set_more_global()
{
	global $global;
	$global['user_id'] = 0;
	$global['channel'] = get_global('channel','index');
	$global['mod'] = get_global('mod','profile');
	$global['cat'] = get_global('cat',0);
	$global['page'] = get_global('page',1);
	$global['id'] = get_global('id',0);	
	$global['original'] = $global['channel'];
}
//新秀
?>