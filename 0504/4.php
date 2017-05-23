<?php
	// include "3.php";
	function __autoload($className){
		include "$className"."php";
	}
	$bmw1 =new bmw();

?>