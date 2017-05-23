<?php
//上传文件
//上传类型 上传大小 储存位置（文件夹）
//如果用户传的是一张图，加水印
//如果用户上传是一张图，是否生成缩略图
    class Upload{
        private $exts=array();
        private $size;
        private $path;
        private $error; //上传失败时的错误（为什么上传失败，类型不对 大小不对）
        private $waterOn;
        private $uploadFiles=array();
        /*
         * 构造函数
         * @param string 上传文件储存位置
         * @param array  允许上传的类型
         * @param int 允许上传的大小
         */
        function __construct($path="",$exts="",$size="") {
            $this->path = $path?$path:C("UPLOAD_PATH");
            $this->exts = empty($exts)?array_keys(C("UPLOAD_EXT_SIZE")):(is_array($exts)?$exts:explode(",",$exts));//允许上传的类型
            p($this->exts);
            $this->size =(int)$size?(int)$size:C("UPLOAD_EXT_SIZE");

        }
    }