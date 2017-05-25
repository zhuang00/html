<?php
    include "../functions.php";
    include "./Upload.class.php";
//    p($_FILES);exit;
    C(include"./config.php");
    C("WATER_POS",5);
    $up = new Upload();
    $data = $up->upload();
    var_dump($data);
//    p($up->error);

