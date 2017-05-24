<?php
    include "../functions.php";
    include "./Upload.class.php";
//    p($_FILES);exit;
    C(include"./config.php");
    $up = new Upload();
    $data = $up->upload();
    var_dump($data);
//    p($up->error);

