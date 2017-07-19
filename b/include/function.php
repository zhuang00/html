<?php
//严格过滤字符串中的危险符号
function strict($str)
{
	if(get_magic_quotes_gpc())
	{
		$str = stripslashes($str);
	}
	$str = str_replace('&#','{^}',$str);
	$str = str_replace('#','&#35;',$str);
	$str = str_replace('--','-&#45;',$str);
	$str = str_replace('/*','/&#42;',$str);
	$str = str_replace('*/','&#42;/',$str);
	$str = str_replace('<','&#60;',$str);
	$str = str_replace('>','&#62;',$str);
	$str = str_replace('(','&#40;',$str);
	$str = str_replace(')','&#41;',$str);
	$str = str_replace("'",'&#39;',$str);
	$str = str_replace('"','&#34;',$str);
	$str = str_replace('\\','&#92;',$str);
	$str = str_replace('%20','&nbsp;',$str);
	$str = str_replace(chr(13).chr(10),'<br />',$str);
	$str = str_replace('{^}','&#',$str);
	return $str;
}
//宽松过滤字符串中的危险符号
function loose($str)
{
	if(get_magic_quotes_gpc())
	{
		$str = stripslashes($str);
	}
	$str = str_replace('&#','{^}',$str);
	$str = str_replace('#','&#35;',$str);
	$str = str_replace('--','-&#45;',$str);
	$str = str_replace('/*','/&#42;',$str);
	$str = str_replace('*/','&#42;/',$str);
	$str = str_replace('(','&#40;',$str);
	$str = str_replace(')','&#41;',$str);
	$str = str_replace("'",'&#39;',$str);
	$str = str_replace('\\','&#92;',$str);
	$str = str_replace('<?','&#60;&#63;',$str);
	$str = str_replace('?>','&#63;&#62;',$str);
	$str = str_replace('<%','&#60;&#37;',$str);
	$str = str_replace('%>','&#37;&#62;',$str);
	$str = str_replace(chr(13).chr(10),'',$str);
	$str = str_replace('{^}','&#',$str);
	return $str;
}
//不过滤
function no_filter($str)
{
	if(get_magic_quotes_gpc())
	{
		$str = stripslashes($str);
	}
	return $str;
}
//反过滤
function im_filter($str)
{
	$str = str_replace('&#35;','#',$str);
	$str = str_replace('-&#45;','--',$str);
	$str = str_replace('&#40;','(',$str);
	$str = str_replace('&#41;',')',$str);
	$str = str_replace('&#39;',"'",$str);
	return $str;
}
//截取字符串
function cut_str($string,$sublen,$start = 0)
{
	$pr = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
	preg_match_all($pr,$string,$t_string);
	$arr = $t_string[0];
	$arr_len = count($arr);
	for($i = 0; $i < $arr_len; $i ++)
	{
		if($arr[$i] != 'delete')
		{
			if(strlen($arr[$i]) == 1)
			{
				if($i < $arr_len - 1)
				{
					$arr[$i] .= $arr[$i + 1];
					$arr[$i + 1] = 'delete';
				}
			}
		}
	}
	$arr2 = array();
	foreach($arr as $key => $value)
	{
		if($value != 'delete')
		{
			$arr2[] = $value;
		}
	}
	$return = '';
	for($i = $start; $i < $sublen && $i < count($arr2); $i ++)
	{
		$return .= $arr2[$i];
	}
	if(count($arr2) - $start > $sublen)
	{
		return $return.'...';
	}else{
		return $return;
	}
}
//修复HTML标签
function repair_html(&$html)
{
	$a = strlen(strrchr($html,'<'));
	$b = strlen(strrchr($html,'>'));
	if($a < $b || ($a != 0 && $b == 0))
	{
		$html = substr($html,0,-$a);
	}
	return $html;
}
//数字限界
function num_bound($min,$max,$num)
{
	$num = intval($num);
	if($min < $max)
	{
		if($num < $min) $num = $min;
		else if($num > $max) $num = $max;
	}else{
		$num = $min;
	}
	return $num;
}
//获取完整路径中的文件名或扩展名
function get_file_name($full_path,$str)
{
	if($full_path != '')
	{
		return substr(strrchr($full_path,$str),1);
	}else{
		return '';
	}
}
//判断文件是否为合法图片
function is_image($file_name){
    $types = '.gif|.jpeg|.png';
	if(function_exists('imagecreate'))
	{
		if(file_exists($file_name))
		{
			$info = getimagesize($file_name);
			$ext = image_type_to_extension($info['2']);
			return stripos($types,$ext);
		}else{
			return false;
		}
	}else{
		return true;
	}
}
//设置全局变量数组
function set_global($filter = 'strict')
{
	global $global;
	$global = array();
	$global['url'] = $filter($_SERVER['QUERY_STRING']);
	if($global['url'] != '')
	{
		$arr = explode('/',$global['url']);
		$global['channel'] = $arr[1];
		for($i = 0; $i < count($arr); $i ++)
		{
			$strpos = strpos($arr[$i],'-');
			if($strpos)
			{
				$key = substr($arr[$i],0,$strpos);
				$value = substr($arr[$i],$strpos + 1);
				if(!isset($global[$key]))
				{
					if(is_numeric($value) && strpos($value,'.') === false)
					{
						$global[$key] = intval($value);
					}else{
						$global[$key] = $value;
					}
				}
			}
		}
	}
}
//获取全局变量值
function get_global($key,$val = '')
{
	global $global;
	return isset($global[$key]) ? $global[$key] : $val;
}
//获取post
function post($val,$filter = 'strict')
{
	return $filter(isset($_POST[$val])?$_POST[$val]:'');
}
//获取get
function get($val,$filter = 'strict')
{
	return $filter(isset($_GET[$val])?$_GET[$val]:'');
}
//解码URL字符串并过滤
function url_decode($str,$filter = 'strict')
{
	return $filter(rawurldecode($str));
}
//获取指定URL页面内容
function https_request($url,$data = NULL)
{
	$curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
    if (!empty($data))
	{
        curl_setopt($curl,CURLOPT_POST,1);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
    }
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
//获取客户端IP
function get_ip()
{
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown'))
	{
		$ip = getenv('HTTP_CLIENT_IP');
	}elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')){
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'),'unknown')){
		$ip = getenv('REMOTE_ADDR');
	}elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')){
		$ip = $_SERVER['REMOTE_ADDR'];
	}else{
		$ip = '0.0.0.0';
	}
	if(!is_numeric(str_replace('.','',$ip)))
	{
		$ip = '0.0.0.0';
	}
	return $ip; 
}
//获取网站根目录
function get_root($type = './')
{
	$document = strtolower($_SERVER['DOCUMENT_ROOT']);
	$document = str_replace('\\','/',$document);
	if($type == './')
	{
		$dir = strtolower(dirname(__FILE__));
	}else{
		$dir = strtolower(dirname(dirname(__FILE__)));
	}
	$dir = str_replace('\\','/',$dir);
	$root = substr($dir,strlen($document));
	if($root == ''){
		$root = '/';
	}elseif($root != '/'){
		$root .= '/';
	}
	return $root;
}
//获取单个属性值
function get_attribute($att_str,$att_id)
{
	$return = '';
	$arr = json_decode(url_decode($att_str,'no_filter'),true);
	if(isset($arr[$att_id]))
	{
		$return = $arr[$att_id];
	}
	return $return;
}
//获取熟悉数组
function get_att_list($arr,$str,$code = '')
{
	$arr2 = array();
	for($i = 0;$i < count($arr);$i ++)
	{
		if($code == '' || $code == $arr[$i]['att_code'])
		{
			$key = $arr[$i]['att_code'];
			$arr2[$key]['id'] = $arr[$i]['att_id'];
			$arr2[$key]['code'] = $arr[$i]['att_code'];
			$arr2[$key]['name'] = $arr[$i]['att_name'];
			$arr2[$key]['value'] = get_attribute($str,$arr[$i]['att_id']);
			if($code != ''){break;}
		}
	}
	return $arr2;
}
//自动包含指定目录下所有文件
function include_all($dir)
{
	$list = glob($dir . '/*');
	for($i = 0; $i < count($list); $i ++)
	{
		if(!is_dir($list[$i]))
		{
			include($list[$i]);
		}
	}
}
//复制目录
function copy_dir($src,$dst)
{
	$dir = opendir($src);
	if(!file_exists($dst))
	{
		mkdir($dst,0777,true);
	}
	while(false !== ($file = readdir($dir)))
	{
		if(($file != '.') && ($file != '..'))
		{
			if(is_dir($src.'/'.$file))
			{
				copy_dir($src.'/'.$file,$dst.'/'.$file);
			}else{
				copy($src.'/'.$file,$dst.'/'.$file);
			}
		}
	}
	closedir($dir);
}
//删除目录
function del_dir($src)
{
	$dir = opendir($src);
	while(false !== ($file = readdir($dir)))
	{
		if(($file != '.') && ($file != '..'))
		{
			if(is_dir($src.'/'.$file))
			{
				del_dir($src.'/'.$file);
			}else{
				unlink($src.'/'.$file);
			}
		}
	}
	closedir($dir);
}
//生成随机数
function get_random($val = '',$len = 3)
{
	if($val == '')
	{
		return time() . str_pad(mt_rand(1,pow(10,$len) - 1),$len,'0',STR_PAD_LEFT);
	}else{
		return $val . str_pad(mt_rand(1,pow(10,$len) - 1),$len,'0',STR_PAD_LEFT);
	}
}
//生成随机字符串
function get_random_str($len = 32)
{
	$str = '';
	$start = ord('a');
	for($i = 0; $i < $len; $i ++)
	{
		$num = mt_rand($start,$start + 25);
		$str .= chr($num);
	}
	return $str;
}
//提示出错
function error_info()
{
	echo 'Error:' . $_SERVER['REQUEST_URI'];
	exit();
}
//加载语言包
function load_lang_pack($project,$name = array())
{
	global $lang;
	$lang = array();
	array_unshift($name,'common');
	for($i = 0; $i < count($name); $i ++)
	{
		$path = 'languages/'.S_LANG.'/'.$project.'/'.$name[$i].'.txt';
		if($name[$i] == 'common' || file_exists($path))
		{
			$str = file_get_contents($path);
			$str = str_replace("\xef\xbb\xbf",'',$str);
			$str = str_replace(' => ','=>',$str);
			$str = str_replace("\r",'',$str);
			while(strpos($str,"\n\n") !== false)
			{
				$str = str_replace("\n\n","\n",$str);
			}
			$arr = explode("\n",$str);
			for($j = 0; $j < count($arr); $j ++)
			{
				if(strpos($arr[$j],'=>') !== false)
				{
					$arr2 = explode('=>',$arr[$j]);
					$lang[$arr2[0]] = $arr2[1];
				}
			}
		}
	}
}
///////////////////////////////////////////////////////////////
function controller()
{
	global $global,$smarty;
	
	$cmd = post('cmd');
	if($cmd == '')
	{
		$path = S_PROJECT . '/' . $global['channel'] . '.php';
		if(file_exists($path))
		{
			include($path);
		}else{
			include(S_PROJECT . '/' . S_PROJECT . '.php');
		}
	}else{
		include(S_PROJECT . '/common.func.php');
		
		$deal_file = get_global('file','deal');
		if($global['channel'] == 'deal')
		{
			load_lang_pack(S_PROJECT,array('info'));
			$path = S_PROJECT . '/module/deal.php';
		}else{
			load_lang_pack(S_PROJECT,array($global['channel']));
			$path = S_PROJECT . '/module/' . $global['channel'] . '/' . $deal_file . '.php';
		}
		if(file_exists($path))
		{
			include($path);
			$cmd = post('cmd');
			if(function_exists($cmd))
			{
				$cmd();
				exit();
			}
		}
		
		$material = get_material();
		$result = https_request(S_SERVER_URL,$material);
		//echo $result;
		$arr = json_decode($result,true);
		initial_simple($arr);
	}
}
function get_material($config_file_name = '',$cmd = S_PROJECT)
{
	global $global,$lang,$config;
	
	$material['post'] = $_POST;
	$material['version'] = YUN_VERSION;
	$material['cmd'] = $cmd;
	$material['config'] = $config;
	$material['global'] = $global;
	$material['lang'] = $lang;
	if($config_file_name != '')
	{
		$material['tpl_config'] = get_tpl_config($config_file_name);
	}
	
	$material['user_ip'] = get_ip();
	$material['server']['HTTP_USER_AGENT'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$material['server']['SERVER_NAME'] = $_SERVER['SERVER_NAME'];
	$material['server']['SERVER_PORT'] = $_SERVER['SERVER_PORT'];
	$material['server']['SERVER_SOFTWARE'] = $_SERVER['SERVER_SOFTWARE'];
	
	return array('material'=>rawurlencode(json_encode($material)));
}
function initial_simple($arr)
{
	if(isset($arr['callback']))
	{
		foreach($arr['callback'] as $key => $value)
		{
			if(isset($value['a']))
			{
				if(isset($value['b']))
				{
					$path = S_PROJECT.'/module/'.$value['a'].'/'.$value['b'].'.php';
				}else{
					$path = S_PROJECT.'/module/'.$value['a'].'/deal.php';
				}
			}else{
				$path = S_PROJECT.'/module/deal.php';
			}
			include_once($path);
			if(isset($value['v']))
			{
				$result = $key($value['v']);
			}else{
				$result = $key();
			}
			if($result)
			{
				$arr['result'] = $result;
			}
		}
	}
	if(isset($arr['result']))
	{
		$result = $arr['result'];
		if(isset($result['type']))
		{
			if($result['type'] == 'ajax')
			{
				echo $result['result'];
			}elseif($result['type'] == 'jump'){
				header('location:'.$result['url']);
			}elseif($result['type'] == 'info'){
				header('location:?/info/result-'.rawurlencode(json_encode($result)));
			}
		}
	}
}
function get_tpl_config($file_name)
{
	global $global;
	$path = S_TPL_PATH . 'config/' . S_PROJECT . '/' . $file_name . '.php';
	$path2 = S_TPL_PATH . 'config/' . S_PROJECT . '/default.php';
	if(file_exists($path))
	{
		include($path);
		if(isset($tpl_config) && is_array($tpl_config))
		{
			return $tpl_config;
		}
	}elseif(file_exists($path2)){
		include($path2);
		if(isset($tpl_config) && is_array($tpl_config))
		{
			return $tpl_config;
		}
	}
	return array();
}
function url($arr)
{
	extract($arr);
	$str = S_FRONT_URL;
	if(isset($entrance))
	{
		$str .= $entrance . '?/';
		unset($arr['entrance']);
	}else{
		$str .= S_URL_PREFIX;
	}
	if(isset($channel) || isset($prefix))
	{
		if(isset($channel))
		{
			$str .= $channel . '/';
			unset($arr['channel']);
		}elseif(isset($prefix)){
			if(strpos($prefix,'?') !== false)
			{
				$str = S_FRONT_URL . $prefix . '/';
			}else{
				$str .= $prefix . '/';
			}
			unset($arr['prefix']);
		}
		foreach($arr as $key => $value)
		{
			$str .= $key . '-' . $value . '/';
		}
	}
	$str .= S_URL_SUFFIX;
	return $str;
}
//新秀
?>