<?php
function add_channel_back($back)
{
	global $lang;
	
	$original = $back['original'];
	$code = $back['code'];
	$name = $back['name'];
	$word_1 = $back['word_1'];
	$word_2 = $back['word_2'];
	$flag = $back['flag'];
	
	switch($flag)
	{
		case 0: $info_text = '创建频道失败';break;
		case 1: $info_text = '创建频道成功';break;
		case 2: $info_text = '您所提交的信息不足或有误';break;
		case 3: $info_text = '页面字符名必须是以字母开头、字母数字组合的字符串';break;
		case 4: $info_text = '页面字符名已经存在或长度小于4个字符';break;
	}
	
	if($flag == 1)
	{
		//创建模板配置文件
		$path = S_TPL_PATH.'config/index/';
		if(file_exists($path.$original.'.php'))
		{
			$str = file_get_contents($path.$original.'.php');
			$str = str_replace($word_1,$word_2,$str);
			file_put_contents($path.$code.'.php',$str);
		}
		//创建程序文件
		$path = 'index/';
		if(file_exists($path.$original.'.php'))
		{
			$str = file_get_contents($path.$original.'.php');
			$str = str_replace($word_1,$word_2,$str);
			file_put_contents($path.$code.'.php',$str);
		}
		//创建语言包
		$path = 'languages/'.S_LANG.'/admin/';
		if(file_exists($path.$original.'.txt'))
		{
			$str = file_get_contents($path.$original.'.txt');
			$str = str_replace($word_1,$word_2,$str);
			file_put_contents($path.$code.'.txt',$str);
		}	
		$path = 'languages/'.S_LANG.'/index/';
		if(file_exists($path.$original.'.txt'))
		{
			$str = file_get_contents($path.$original.'.txt');
			$str = str_replace($word_1,$word_2,$str);
			file_put_contents($path.$code.'.txt',$str);
		}
		//修改伪静态文件
		$path = 'admin/module/basic/htaccess.txt';
		if(file_exists($path))
		{
			$str = file_get_contents($path);
			$str .= "\n" . 'RewriteRule ^' . $code .'/(.*)$ index.php?/' . $code . '/$1';
			$str = str_replace("\n\n","\n",$str);
			file_put_contents($path,$str);
		}
	}
	
	$result['type'] = 'info';
	$result['info_text'] = $info_text;
	$result['link_text'] = $lang['return_list'];
	$result['link_href'] = url(array('channel'=>'super','mod'=>'channel_add'));
	return $result;
}
function del_channel_back($back)
{
	if(isset($back))
	{
		$flag = $back['flag'];
		if($flag == 1)
		{
			$channel = $back['channel'];
			$code = $back['code'];
			//删除模板配置文件
			$path = S_TPL_PATH.'config/index/'.$channel.'.php';
			if(file_exists($path))
			{
				unlink($path);
			}
			//删除程序文件
			$path = 'index/'.$channel.'.php';
			if(file_exists($path))
			{
				unlink($path);
			}
			//删除语言包
			$path = 'languages/'.S_LANG.'/admin/'.$channel.'.txt';
			if(file_exists($path))
			{
				unlink($path);
			}	
			$path = 'languages/'.S_LANG.'/index/'.$channel.'.txt';
			if(file_exists($path))
			{
				unlink($path);
			}
			//修改伪静态文件
			$path = 'admin/module/basic/htaccess.txt';
			if(file_exists($path))
			{
				$str = file_get_contents($path);
				$rule = "\n" . 'RewriteRule ^' . $code . '/(.*)$ index.php?/' . $code . '/$1';
				$str = str_replace($rule,'',$str);
				file_put_contents($path,$str);
			}
		}
		$result['type'] = 'ajax';
		$result['result'] = $flag;
		return $result;
	}
}
//新秀
?>