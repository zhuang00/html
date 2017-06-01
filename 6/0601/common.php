<?php
		include "config.inc.php";
		header("Content-type:text/html;charset=utf8");
		$db=mysql_connect(HOST,DBUSER,DBPWD)or die("connect failed");
		$sele_db=mysql_select_db(DBNAME)or die("数据库不存在");
		mysql_query("set names utf8");#告诉mysql返回utf8