<?php
    //1初次化
    $serv=new swoole_websocket_server('0,0,0,0',9555);


    //2打开

    $serv->on('open',function ($server,$req){
        var_dump($server,$req);
    });
    //3监听客户端有没有发送消息内容
    //4关闭，针对于有没有客户端关闭连接