<?php
	// class demo{
	// 	function demo(){
	// 		echo 1111;
	// 	}

	// 	function __construct(){
	// 		echo "3344";


	// 	}
	// }
	// $obj = new demo();
	class car{

		function run(){
			echo "run...";
		}
	}
	class aodi extends car{

	}
	class bmw extends car{

	}
	$aodi1 = new aodi();
	$aodi1->run();