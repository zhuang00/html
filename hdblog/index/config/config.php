<?php
    return array(
        //调试模式
        "DEBUG"=>0,//是否调试
        //数据库
        "DB_HOST"=>"localhost",//数据库地址
        "DB_USER"=>"root",
        "DB_PWD"=>"456123",
        "DB_CHAR"=>"utf8",
        "DB_NAME"=>"hdblog",
        //水印处理
        "WATER_ON"=>1,//水印开关
        "WATER_IMG"=>"./data/3.png",//水印图片
        "WATER_FONT"=>"./data/1.ttf",//水印字体
        "WATER_POS"=>9,//水印位置
        "WATER_PCT"=>80,//水印透明度
        "WATER_TEXT"=>"http://bbs.houdunwang.com",//水印文字
        "WATER_TEXT_COLOR"=>"#333333",//文字颜色 必须为16进制表示
        "WATER_TEXT_SIZE"=>16,//水印文字大小
        "WATER_TEXT_FONT"=>"./data/1.ttf",
        "WATER_QUA"=>80, //图片的压缩比
        //缩略图处理
        "THUMB_WIDTH"=>280,
        "THUMB_HEIGHT"=>280,
        "THUMB_TYPE"=>3, //缩放类型 1宽度固定 高度自增 2缩略图尺寸不变，对原图进行裁切
        "THUMB_ENDFIX"=>"_thumb" //缩略图后缀



    );