<?php

	$dir=opendir("a");
// 	var_dump(readdir($dir));
// 	var_dump(readdir($dir));
// 	var_dump(readdir($dir));
// 	var_dump(readdir($dir));
// 
// while($file=readdir($dir)){

// 	echo "file=>".$file."<br/>";
// }
//lob->scandir->opendir
// file_put_contents(filename, data)
$res=fopen("a/a2.txt","a"); //append追加
// echo fread($res, filesize('a/111.txt'));
// fwrite($res, "qq.com");
//a w 文件没有创建 w将文件内容清空 a 在文件原有内容后添加
//r 如果文件没有失败
?>
