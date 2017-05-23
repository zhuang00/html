<?php
    header("Content-type:image/jpeg");
//    $res = imagecreate(200,200);//定义画布
//    //RGB RED GREEN BLUE 255 255 255 FFFFFF 0 0 0
//    $red =imagecolorallocate($res,255,0,0);//给画布定义一个颜色为红色
//    imagefill($res,0,0,$red);//向画布填充颜色
//    imagejpeg($res);//输出图像
//    imagejpeg($res,"a1.jpg");//存储图像
//    for($i-0;$i<30;$i++){
//        $res = imagecreate($i+20,$i+20);//定义画布
//        $red =imagecolorallocate($res,255,0,0);//给画布定义一个颜色为红色
//        imagefill($res,0,0,$red);//向画布填充颜色
//        imagejpeg($res);//输出图像
//        imagejpeg($res,"a{$i}.jpg");//存储图像
//    }
    $res = imagecreatetruecolor(200,200);
    $red=imagecolorallocate($res,255,255,0);
    imagefill($res,0,0,$red);
    imagejpeg($res);