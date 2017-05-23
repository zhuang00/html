<?php
    $path = $_GET['file'];
    if(@unlink($path)){
        echo 1;
    }