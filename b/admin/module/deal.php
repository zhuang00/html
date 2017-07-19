<?php
function get_upl_file_name()
{
	$dir = post('dir');
	$file = post('file');
	if($file != rawurlencode($file))
	{
		$file = date('Ymdhis').substr($file,-4);
	}
	$result = $file;
	for($i = 1; $i < 1000; $i ++)
	{
		if(file_exists($dir.$result))
		{
			$result = $i.'_'.$file;
		}else{
			break;
		}
	}
	echo $result;
}
function get_version()
{
	$str = 'htt'.'p://ww'.'w.si'.'ns'.'iu.co'.'m/njb/v_php.php';
	$str = file_get_contents($str);
	if(substr($str,0,9) == 'njb_send:')
	{
		$result = $str;
	}else{
		$result = '';
	}
	echo $result;
}
function del_file()
{
	$path = post('path');
	$path = str_replace('../','',$path);
	$dir[0] = 'data/backup/';
	$dir[1] = 'images/';
	$dir[2] = 'resource/';
	$flag = false;
	for($i = 0; $i < count($dir); $i ++)
	{
		if(substr($path,0,strlen($dir[$i])) == $dir[$i])
		{
			$flag = true;
		}
	}
	if($flag)
	{
		if(unlink($path))
		{
			$result = 1;
		}
	}
	echo isset($result) ? $result : 0;
}
function set_admin_id($back)
{
	$_SESSION['admin_id'] = $back['admin_id'];
}
//新秀
?>