<?php
// unlink() ===rm

// del_dir();
include("../functions.php");
if(del("test.txt")){
	echo "del ok";
}else{
	echo "null";
}