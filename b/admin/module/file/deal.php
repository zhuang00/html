<?php
function select_tpl()
{
	$tpl = post('tpl');
	$nane = 'S_TPL_PATH';
	$value = 'templates/'.$tpl.'/';
	edit_config($nane,$value);
	
	echo 1;
}
function add_lang_back()
{
	global $lang;
	$chinese_name = post('chinese_name');
	$foreign_name = post('foreign_name');
	$pack_name = post('pack_name');
	$short_name = post('short_name');
	$index_entrance = post('index_entrance');
	$admin_entrance = post('admin_entrance');
	if($chinese_name != '' && $foreign_name != '' && $pack_name != '' && $index_entrance != '' && $admin_entrance != '' && $index_entrance != 'index.php' && $admin_entrance != 'admin.php')
	{
		if(!file_exists('languages/'.$pack_name))
		{
			copy_dir('languages/'.S_LANG,'languages/'.$pack_name);
		}
		
		if(S_MULTILINGUAL)
		{
			$file = file_get_contents('admin/index.txt');
			$file = str_replace('{$pack_name}',$pack_name,$file);
			$file = str_replace('{$index_entrance}',$index_entrance,$file);
			$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
			file_put_contents($index_entrance,$file);
			
			$file = file_get_contents('admin/admin.txt');
			$file = str_replace('{$pack_name}',$pack_name,$file);
			$file = str_replace('{$index_entrance}',$index_entrance,$file);
			$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
			file_put_contents($admin_entrance,$file);
		}
		$info_text = '添加语言成功';
	}else{
		$info_text = '的输入不合法，添加语言失败';
	}
	
	$result['type'] = 'info';
	$result['info_text'] = $info_text;
	$result['link_text'] = $lang['return_list'];
	$result['link_href'] = url(array('channel'=>'file','mod'=>'lang_lists'));
	return $result;
}
function del_lang_back($back)
{
	$index_entrance = $back['index_entrance'];
	$admin_entrance = $back['admin_entrance'];
	$pack_name = $back['pack_name'];
			
	if(file_exists($index_entrance)) unlink($index_entrance);
	if(file_exists($admin_entrance)) unlink($admin_entrance);
	if(file_exists('languages/'.$pack_name)) del_dir('languages/'.$pack_name);
	
	$result['type'] = 'ajax';
	$result['result'] = 1;
	return $result;
}
function edit_lang_back()
{
	global $lang;
	$path = post('path');
	$lang_text = post('lang_text','no_filter');
	file_put_contents($path,$lang_text);
	
	$result['type'] = 'info';
	$result['info_text'] = '编辑语言包成功';
	$result['link_text'] = '返回上一页';
	$result['link_href'] = url(array('channel'=>'file','mod'=>'lang_edit','path'=>rawurlencode($path)));
	return $result;
}
function upload()
{
	$dir = post('dir');
	$file = post('file');
	$suffix = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg,rar,zip,pdf',$suffix) !== false)
	{
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		setcookie('file',$dir.$file);
	}
}

//新秀
?>