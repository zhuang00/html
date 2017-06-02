<?php
	include "common.php";
	$sql = "update stu set sname='陈祥',birthday='1977-2-23',sex=1 where sid=9";
	mysql_query($sql);
	if(mysql_affected_rows()){
		echo "update ok";
	}else{
		echo "update error";
	}