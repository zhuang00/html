<?php
//上传文件
//上传类型 上传大小 储存位置（文件夹）
//如果用户传的是一张图，加水印
//如果用户上传是一张图，是否生成缩略图
    class Upload{
        private $exts=array();
        private $size;
        private $path;
        public $error=array(); //上传失败时的错误（为什么上传失败，类型不对 大小不对）
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
//            p($this->exts);
            $this->size =(int)$size?(int)$size:C("UPLOAD_EXT_SIZE");

        }
        //$_FILES
        public function upload(){
            //验证目录是否存在，如果不存在创建，创建不成功时候返回false
            if(!$this->checkDir($this->path)){
                $this->error ="上传目录不可写";
                return false;
            }
            $files=$this->format();//将$_FILES数据统一成标准格式
            $uploadFiles = array();//最终成功上传到服务器上的文件
            foreach($files as $f){
                $info = pathinfo($f['name']);
                $f['ext'] = isset($info['extension'])?$info['extension']:"";
                $f['filename']=isset($info['filename'])?$info['filename']:"";
               if(!$this->checkFile($f)){
                   continue;
               }
               //合法的文件写入硬盘
               $upFile = $this->save($f);
               if($upFile!==false){
                   $uploadFiles[]=$upFile;
               }
            }
            return $uploadFiles;
        }
        //合法的文件写入硬盘
        private function save($file){
            $toFile=$this->path.'/'.mt_rand(1,10000).time().'.'.$file['ext'];//目标文件（放到服务器说的文件）
            if(!move_uploaded_file($file['tmp_name'],$toFile)){
                $this->error[]=array('filename'=>$file['name'],'error'=>'上传文件储存失败');
                return false;
            }
            return $toFile;
        }
        //验证文件
        private function checkFile($file){
//            p($file);
            if($file['error']!=0){
                switch($file['error']){
                    case 1:
                        $error = "文件超过了php.ini中的允许大小";
                        break;
                    case 2:
                        $error = "文件超过表单允许的大小";
                        break;
                    case 3:
                        $error = "上传文件不完整";
                        break;
                    case 4:
                        $error = "没有文件上传";
                        break;
                    case 5:
                        $error = "临时目录不存在";
                        break;
                    case 6:
                        $error = "临时目录不可写";
                        break;
                }
                $this->error[]=array('filename'=>$file['name'],'error'=>$error);
                return false;
            }
            //验证文件类型与大小
            $exts = array_change_value($this->exts);
            $ext =strtolower($file['ext']);
            //检测文件类型是否允许
           if(!in_array($ext,$exts)){
                $this->error[]=array('filename'=>$file['filename'],'error'=>'文件类型不允许上传');
                return false;
           }
            //检测文件大小
            $allowSize = is_array($this->size) && isset($this->size[$ext])?$this->size[$ext]:$this->size;
            if($file['size']>$allowSize){
                $this->error[]=array('filename'=>$file['filename'],'error'=>'文件过大');
                return false;
            }
            //是否是一个合法的上传文件
            if(!is_uploaded_file($file['tmp_name'])){
                $this->error[]=array('filename'=>$file['filename'],'error'=>'非法上传');
                return false;
            }
            return true;

        }
        //将$_FILES数据统一成标准格式
        private function format(){
            $files =$_FILES;
            $id = 0;
            $arr = array();
            foreach($files as $f){
                if(is_array($f['name'])){
                    foreach($f['name'] as $k=>$v){
                        $arr[$id]['name']=$v;
                        $arr[$id]['type']=$f['type'][$k];
                        $arr[$id]['tmp_name']=$f['tmp_name'][$k];
                        $arr[$id]['error']=$f['error'][$k];
                        $arr[$id]['size']=$f['size'][$k];
                        $id++;
                    }
                }else{
                    $arr[$id]=$f;
                }
            }
            return $arr;
        }
        //验证目录
        private function checkDir($dir){
           if(!is_dir($dir)){
               if(mkdir($dir,0777,true)){
                   return true;
               }
               return false;
           }
           return is_writable($dir);
        }

    }