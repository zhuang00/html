<?php
		include "common.php";
		//$sql="drop table if exists abc3333333333333";
		//mysql_query($sql);exit;#
		$sql="select * from stu where sex=2  and year(birthday)='1992'";#sql语句
		$result = mysql_query($sql);
		$row=array();#保存结果
		if(mysql_num_rows($result)){
		while($r= mysql_fetch_assoc($result)){
			$row[]=$r;
		}
	}
		mysql_free_result($result);
		mysql_close($db);
		echo '<pre>';
		print_r($row);
		