<?php
    include "Common.php";
    //开启事务
    $db->autocommit(0);
    $cid = (int)$_GET['cid'];
    if($db->query("DELETE FROM category WHERE cid = $cid")){
        if($db->query("DELETE FROM news WHERE cid = $cid")){
            echo 'ok';
            $db->commit();
        }else{
            echo 'error';
            $db->rollback();//回滚
        }
    }else{
        echo 'error';
        $db->rollback();//回滚
    }