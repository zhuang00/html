<?php
    include "../functions.php";

    function __autoload($className){

        include "control/".$className.".class.php";
    }

    $control = isset($_GET['control']) ? $_GET['control']:"index";
    $action =isset($_GET['action']) ? $_GET['action']:"index";
    define("CONTROL",$control);
    $control=$control."Control";
    $obj= new $control;
    $obj->$action();
?>
