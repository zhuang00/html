<?php
function del_goods_back($back)
{
	$img_x_path = $back['img_x_path'];
	$img_path = $back['img_path'];
	
	if($path = realpath($img_x_path))
	{
		if(file_exists($path) && $img_x_path != 'images/no_img.gif') unlink($path);
	}
	if($path = realpath($img_path))
	{
		if(file_exists($path) && $img_path != 'images/no_img.gif') unlink($path);
	}
}
function upload_back($back)
{
	$x_img_width = $back['x_img_width'];
	$x_img_height = $back['x_img_height'];
	
	$dir = post('dir');
	$file = rawurlencode(post('file'));
	$reduce = intval(post('reduce'));
	$suffix = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg',$suffix) !== false)
	{
		if(!is_dir($dir))
		{
			mkdir($dir,0777,true);
		}
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		setcookie('img',$dir.$file);
		if($reduce)
		{
			if(function_exists('imagecreate'))
			{
				include('include/resizeimage.class.php');
				$resizeimage = new resizeimage($dir.$file,$x_img_width,$x_img_height,false,$dir.'x_'.$file);
			}else{
				copy($dir.$file,$dir.'x_'.$file);
			}
		}
	}
}
//新秀
?>