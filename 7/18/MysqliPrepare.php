<?php
    include "Common.php";
    #1准备一条SQL
    #2绑定参数
    #3执行
    #1
    $sql = "select nid,title from news where title like ?";
    if(!$stmt = $db->prepare($sql)){
        exit("预准备SQL出错:".$db->error);
    }
    #2
    $stmt->bind_param("s",$title);
    $title = "%1%";
    if($stmt->execute()){
        if($stmt->store_result()){
          $stmt->bind_result($_nid,$_title);
          while ($field =$stmt->fetch()){
              echo $_nid."=>".$_title.'<br/>';
          }
          echo"共有:".$stmt->affected_rows."记录";
        }

    }
    //释放预准备的资源占用
    $stmt->close();
    //关闭mysql连接
    $db->close();