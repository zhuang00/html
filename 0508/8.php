<?php
    include "../functions.php";
    $arr =array(
        0=>array("username"=>"lisi","age"=>22),
        1=>array("username"=>"wangwu","age"=>32)
    );
    p(current($arr));