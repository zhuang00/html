<?php
    class Control{
        private $_vars=array();//保存变量
        public function __construct(){
            if(method_exists($this,"__init")){
                $this->__init();
            }
    }
        protected function assign($name,$value){
            $this->_vars[$name]=$value;
        }
        protected function display($tpl=null){
            if(is_null($tpl)){
                $tpl = METHOD.'.html';
            }
//            var_dump($tpl);exit;
            $tpl = str_replace(".html","",$tpl).".html";

            $tplFile = PATH_TPL.'/'.CONTROL.'/'.$tpl;
//            echo $tpl
            if(!is_file($tplFile)){
                error("模板文件{$tplFile}不存在");
            }else{
                extract($this->_vars);
                include $tplFile;
            }
        }
    }