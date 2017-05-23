<?php 
	include "../functions.php";
	include "words.php";
	$_wordArr = preg_split("/@/", $words);
	$stat =true;
	foreach($_wordArr as $w) {
		if(preg_match("/{$w}/i", $_POST['title'])){
			$stat=false;break;

		}
		if(preg_match("/{$w}/i", $_POST['con'])){
			$stat=false;break;

		}
	}
	if($stat===false){

		//echo"<script>alert('bad');location.href="2.php";</script>"
		echo "<script>alert('bad');location.href='2.php';</script>";

	}else{

		echo "ok";
	}