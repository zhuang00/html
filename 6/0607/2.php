<?php
    function h1($data){
        return "<h1>$data</h1>";
    }
    include "common.php";
    $smarty->assign("name","houdunwang");
    $smarty->display("2.html");