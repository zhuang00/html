<?php
    is_dir("session")||mkdir("session");
    session_save_path("session");
    session_start();
    $_SESSION["webname"]="baidu";