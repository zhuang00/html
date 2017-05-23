<?php
    $sessid = $_POST['sessid'];
    session_id($sessid);
    session_start();
    if(!isset($_SESSION['admin'])){
        echo "not auth";exit;
    }

    include "../../functions.php";
    //检测上传过程中是否有错误
    if($_FILES['Filedata']['error']==0){
        //检测是否为合法文件
        if(is_uploaded_file($_FILES['Filedata']['tmp_name'])){
            is_dir("upload")||mkdir("upload");//创建上传目录
            $toFile='upload/'.time().mt_rand(1,1000).strrchr($_FILES['Filedata']['name'],".");//目标文件名
            if(move_uploaded_file($_FILES['Filedata']['tmp_name'],$toFile)){
                echo json_encode(array('error'=>0,"url"=>$toFile));exit;
            }
        }
    }
    //上传失败
    echo json_encode(array('error'=>1));exit;