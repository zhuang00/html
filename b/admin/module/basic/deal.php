<?php
function edit_show()
{
	$id = post('id');
	$arr = explode('-',$id);
	$path = S_TPL_PATH . 'config/index/' . $arr[0] . '.php';
	include($path);
	$page_name = $tpl_config[0]['page_name'];
	$page_index = $tpl_config[0]['page_index'];;
	for($i = 1; $i < count($tpl_config); $i ++)
	{
		$module = str_replace('*','',$tpl_config[$i]['module']);
		
		if($module == $arr[1])
		{
			$str = file_get_contents($path);
			if(intval($arr[2]))
			{
				$str = str_replace("'module'=>'*$module'","'module'=>'$module'",$str);
				file_put_contents($path,$str);
				edit_tpl_show($arr[0],$arr[1],1);
				
			}else{
				$str = str_replace("'module'=>'$module'","'module'=>'*$module'",$str);
				file_put_contents($path,$str);
				edit_tpl_show($arr[0],$arr[1],0);
			}
			break;
		}
	}
	echo 1;
}
function edit_tpl_show($page_name,$module,$val)
{
	$path = S_TPL_PATH.'index/'.$page_name.'.php';
	$file = file_get_contents($path);
	if($val)
	{
		$file = str_replace('{*include file="module/'.$module.'.php"*}','{include file="module/'.$module.'.php"}',$file);
	}else{
		$file = str_replace('{include file="module/'.$module.'.php"}','{*include file="module/'.$module.'.php"*}',$file);
	}
	file_put_contents($path,$file);
}
function set_half_static()
{
	$val = intval(post('val'));
	edit_config('S_HALF_STATIC',$val);
	
	echo 1;
}
function set_sham_static()
{
	$val = intval(post('val'));
	edit_config('S_SHAM_STATIC',$val);
	if($val)
	{
		edit_config('S_URL_PREFIX','');
		copy('admin/module/basic/htaccess.txt','.htaccess');
	}elseif(file_exists('.htaccess')){
		if(S_PURE_STATIC == 1)
		{
			edit_config('S_URL_PREFIX','html/');
		}else{
			edit_config('S_URL_PREFIX','?/');
		}
		unlink('.htaccess');
	}
	echo 1;
}
function set_pure_static()
{
	$val = intval(post('val'));
	edit_config('S_PURE_STATIC',$val);
	if($val)
	{
		edit_config('S_URL_PREFIX','html/');
	}else{
		edit_config('S_URL_PREFIX','?/');
	}
	echo 1;
}
function static_check()
{
	if(S_HALF_STATIC == 1)
	{
		echo 1;
	}else{
		echo 0;
	}
}
function clear_static_back()
{
	$type = post('type');
	if($type == 'all')
	{
		del_dir('html');
	}elseif($type == 'sheet'){
		del_dir_special('html','id-');
	}else{
		del_dir('html/'.$type);
	}
	echo 1;
}
function del_dir_special($src,$str)
{
	$dir = opendir($src);
	while(false !== ($file = readdir($dir)))
	{
		if(($file != '.') && ($file != '..') && (substr($file,0,strlen($str)) != $str))
		{
			if(is_dir($src.'/'.$file))
			{
				del_dir_special($src.'/'.$file,$str);
			}else{
				unlink($src.'/'.$file);
			}
		}
	}
	closedir($dir);
}
function set_multilingual_back($back)
{
	$val = $back['val'];
	$list = $back['list'];
	edit_config('S_MULTILINGUAL',$val);
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = explode('{v}',$list[$i]['var_value']);
		$pack_name = $arr[0];
		$index_entrance = $arr[1];
		$admin_entrance = $arr[2];
		if($pack_name == 'zh-cn')
		{
			continue;
		}else{
			if($val == 1)
			{
				if(!file_exists($index_entrance))
				{
					$file = file_get_contents('admin/index.txt');
					$file = str_replace('{$pack_name}',$pack_name,$file);
					$file = str_replace('{$index_entrance}',$index_entrance,$file);
					$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
					file_put_contents($index_entrance,$file);
				}
				if(!file_exists($admin_entrance))
				{
					$file = file_get_contents('admin/admin.txt');
					$file = str_replace('{$pack_name}',$pack_name,$file);
					$file = str_replace('{$index_entrance}',$index_entrance,$file);
					$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
					file_put_contents($admin_entrance,$file);
				}
			}else{
				if(file_exists($index_entrance)) unlink($index_entrance);
				if(file_exists($admin_entrance)) unlink($admin_entrance);
			}
		}
	}
	$result['type'] = 'ajax';
	$result['result'] = 1;
	return $result;
}
function clear_cache()
{
	del_dir('admin/compile');
	del_dir('index/compile');
	
	echo 1;
}
//新秀
?>