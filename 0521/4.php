<?php
   header("Content-Type:image/jpeg");
    $res = imagecreatetruecolor(200,200);
    $white=imagecolorallocate($res,255,255,255);
    $str = "hello houdunwang.com";
    for($i=0;$i<strlen($str);$i++) {
        imagestring($res,5, mt_rand(0, 200), mt_rand(0, 200), $str[$i], $white);


    }

    imagepng($res);
