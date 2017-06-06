<?php
//实例化扩展模型对象
function K($name){
    $modelFile =PATH_APP.'/model/'.ucfirst($name).'Model.class.php';
    if(!is_file($modelFile)){
        die("扩展模型文件:{$modelFile}不存在");
    }
    require $modelFile;
    $modelClass =$name.'Model';
    return new $modelClass;
}
//实例化出模型对象
//@param string $table 表名
//return Object
function M($table){
        return new Model($table);
}
function error($msg){
    echo "<div style='border:solid 6px #dcdcdc;padding:600px;padding:20px;text-align:center;line-height:2em;'>
        {$msg}
        </div>";
    exit;

}
function p($arr){
      header('content-type:text/html;charset=utf8');
      if(is_string($arr)){    
          echo $arr;
     }else if(is_array($arr)){
         echo "<pre>";
          print_r($arr);
          echo "</pre>";
     }else{
       var_dump($arr);
     }
 }
 define("RUN_TIME",microtime(true));
//function load($file=null){
//    static $files = array();
//    if(is_null($files)){
//        return $files;
//    }
//    $name =md5($file);
//    if(isset($files['name'])){
//
//    }
//}
function array_key_exists_d($key,$arr){
    $_key =strtolower($key);
    foreach($arr as $k=>$v){
        if($_key==strtolower($k)){
            return true;
        }
    }
    return false;
}
function C($name=null,$value=null){
    static $config =array();
    if(is_null($name)){
        return $config;
    }
    if(is_array($name)) {
        $config = array_merge($config,array_change_key_case($name,CASE_UPPER));
    }
    if(is_string($name)){
        $name=strtoupper($name);
        if(is_null($value)){
            return array_key_exists_d($name,$config)?$config[$name]:null;
        }else{
            $config[$name]=$value;
            return true;
        }
    }
}
// 查看文件或文件夹的大小
function get_dir_size($dir){
	if(!is_dir($dir))return false;
	$files=scandir($dir);
	$size=0;
	foreach($files as $f){

		if(in_array($f,array(".","..")))continue;
		$_file=$dir.'/'.$f;
		$size +=is_dir($_file)?get_dir_size($_file):filesize($_file);
	}
	return $size;
}
//删除文件夹
// function del($file){
// 	if(file_exists($file))return false;
// 	if(is_file($file)){

// 		return unlink($file);
// 	}
// }
//复制文件夹的函数
function copyDir ($sdir,$ddir,$stat=0){
	if(!is_dir($sdir))return false;
	is_dir($ddir)||mkdir($ddir);
	$files = scandir($sdir);
	foreach($files as $f){
		if($f=='.'||$f=='..')continue;
		// echo $f;
		$_sFile = $sdir.'/'.$f;
		$_dFile = $ddir.'/'.$f;
		// copy($_sFile,$_dFile);
		if($stat==0 && is_file($_dFile)) continue;
		is_dir($_sFile)?copyDir($_sFile,$_dFile):copy($_sFile, $_dFile);
			}
			return true;
}

function array_change_key_case_d($arr,$stat=0){
    $_newArr = array();
    $func = $stat?"strtoupper":"strtolower";
    if(!is_array($arr)||empty($arr)){
        return $_newArr;
    }
    foreach($arr as $k=>$v){
        $_k=$func($k);
        $_newArr[$_k] = is_array($v)?array_change_key_case_d($v,$stat):$v;
    }
    return $_newArr;
}
function array_change_value($arr,$type=0){
    $func =$type?"strtoupper":"strtolower";
    $_newArr = array();
    if(!is_array($arr)||empty($arr)){
        return $arr;
    }
    foreach($arr as $k=>$v){
        $_newArr[$k] = is_array($v)?array_change_value($v,$type):$func($v);
    }
    return $_newArr;
}