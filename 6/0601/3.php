<?php

	include "common.php";
	$sql = "insert into test(title,content) values('php在线学习系统即将上线','免费在线学习平台上线了'),('text2','text2 body')";
	mysql_query($sql);
	echo mysql_affected_rows();
	#学生表 爱佳 22 1993