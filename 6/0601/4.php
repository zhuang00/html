<?php
	include "common.php";
	$sql = "delete from stu where sid between 20 and 124";
	mysql_query($sql);
	$delRows = mysql_affected_rows();
	if($delRows){
		echo "本次操作删除了{$delRows}条记录";
	}else{
		echo "删除了0条记录";
	}