<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style type="text/css">
		table thead td{background:#333;color:#fff;}
	</style>
</head>
<body>
<h2>文件查看器</h2>
	<?php
		if(isset($_GET['path'])){
			$path = urldecode($_GET['path']);
			if(is_dir($path)){
			echo "<a href='javascript:history.go(-1);'>返回上一级</a>";
			}
		}
	?>	
	
	<table border="1" width="600">	
		<thead>
		<tr>
			<td>ID</td> <td>文件名</td> <td>类型</td> <td>操作</td>
		</tr>
		</thead>
		<?php
		if(isset($_GET['path'])){
			$path = urldecode($_GET['path']);
			// print_r($path);
			if(is_dir($path)){
				// var_dump(is_dir($path));
				$files = glob($path.'/*');
				//print_r( $files);
			}
		}else{
			$files=glob("./*");
			//echo $files;
			}
			foreach($files as $id=>$f):
		?>
		<tr>
			<td> <?php echo $id+1;?> </td>
			<td> <?php echo basename($f);?> </td>
			<td> <?php echo is_dir($f)?"目录":"文件";?> </td>
			<td>
				<?php
					if(is_dir($f)){
				?>
				<a href="?path=<?php echo urldecode($f); ?>">进入</a>
				<?php
					}else{
				?>
				<a href="6.show.php?file=<?php echo urlencode($f);?>"target="_blank" >查看</a>
				<?php }; ?>
				<a href="#">删除</a>
				<a href="#">改名</a>
			</td>
		</tr>
		<?php
		endforeach;
		?>
	</table>	
</body>
</html>