<?php
	include "common.php";
	$sql = "insert into stu(sname,sex,birthday) values('张飞11',1,'1967-2-25')";
	mysql_query($sql);
	echo mysql_insert_id();
	for($i=0;$i<100;$i++){
		$sql = "insert into stu(sname,sex,birthday) value('test{$i}',1,'1990-1-1')";
		mysql_query($sql);
	}