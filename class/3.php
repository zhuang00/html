<?php
    $code = strtoupper($_POST['data']);
    session_start();
    echo $code === $_SESSION['code']?1:0;