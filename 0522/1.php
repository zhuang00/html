<?php
    include "../functions.php";
    C(include "./config.php");
    include "./Image.class.php";
    //////////////水印实验
//    C('WATER_IMG',false);//
//    C("WATER_TEXT_COLOR","#f00f00");
//    $image = new Image();
//    $data = $image->water("1.jpg","2.jpg",1);//1.jpg 1.doc 1.rar
//    var_dump($data);



    /////////////缩略图实验
    $img = new Image();
    $data=$img->thumb("2.jpg","houdun.jpg",300,200);
    var_dump($data);