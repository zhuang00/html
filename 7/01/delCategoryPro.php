<?php
    include "db.php";
    $cid =intval($_GET['cid']);
    exe("call del_category($cid)");