<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1" width="600">
		<tr>
			<td>ID</td>
			<td>文件名</td>
			<td>上传时间</td>
			<td>文件大小</td>
			<td>下载</td>

		</tr>
		<?php
			include "../functions.php";
			$db = include "db.php";
			foreach($db as $k =>$file):
		?>
		<tr>
			<td><?php echo $k+1;?></td>
			<td><?php echo $file['name'];?></td>
			<td><?php echo @date("Y-m-d",$file['time']);?></td>
			<td><?php echo $file['size'];?></td>
			<td>
				<a href="6.3.down.php?id=<?php echo $k;?>">下载</a>
			</td>
		</tr>
		<?php
		endforeach;
		?>
	</table>
</body>
</html>