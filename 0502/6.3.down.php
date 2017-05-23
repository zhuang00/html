<?php
include "../functions.php";
$id =isset($_GET['id'])?$_GET['id']:false;
if($id===false){

	exit;
}
$db = include "db.php";
$file = $db[$id];

header("Content-type:application/octet-stream");
header("Content-disposition:attachment;filename={$file['name']}");
echo file_get_contents($file['path']);