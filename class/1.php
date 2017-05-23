<?php
    include "../functions.php";
    include "./code.class.php";
    session_start();
    $code = new Code(array('num'=>5));
    $code->show();
//$this->fontColor($res,0,0,0);