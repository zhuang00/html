<?php
include "../../functions.php";
    session_name('houdunwang');
    session_start();
    echo session_id();
    echo session_name();
//    echo $_SESSION['login'];
//    unset($_SESSION['login']);
    $_SESSION=array();
//    p($_SESSION);
    session_destroy();
?>

