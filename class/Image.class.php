<?php
    $res = imagecreatetruecolor(100,50);
    $red = imagecolorallocate($res,255,0,0);
    imagefill($res,0,0,$red);
    $jpg = imagecreatefromjpeg("1.jpg");
//    imagecopy($jpg,$res,200,200,0,0,100,50);
    header("Content-type:image/jpeg");
    $shui=imagestring($res,5,56,80,"afadlfjawef",imagecolorallocate($res,0,0,0));
 imagejpeg($shui);
    //imagejpeg($jpg);
//    echo imagesy($jpg);
//    print_r(getimagesize("1.jpg"));
    imagecopy($jpg,$res,imagesx($jpg)-100,imagesy($jpg)-50,0,0,100,50);
imagejpeg($jpg);