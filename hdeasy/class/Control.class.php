<?php
    class Control{
        private $smarty;//Smarty对象
        public function __construct() {
            $this->initSmarty();
            if (method_exists($this, "__init")) {
                $this->__init();
            }

        }
        private function initSmarty(){
            require PATH_HDEASY_PATH.'/plugin/libs/Smarty.class.php';//加载smarty
            $this->smarty = new Smarty();
            $this->smarty->template_dir=PATH_APP.'/tpl/'.CONTROL;
            $this->smarty->compile_dir=PATH_TEMP.'/Application/'.APP.'/'.CONTROL.'/compile';//编译目录
            $this->smarty->cache_dir=PATH_TEMP.'/Application/'.CONTROL.'/cache';//缓存目录
            is_dir($this->smarty->template_dir)||mkdir($this->smarty->template_dir,0777,1);
            is_dir($this->smarty->compile_dir)||mkdir($this->smarty->compile_dir,0777,1);
            is_dir($this->smarty->cache_dir)||mkdir($this->smarty->cache_dir,0777,1);
        }
        protected function assign($name,$value){
            $this->smarty->assign($name,$value);
        }
        protected function display($tpl=NULL){
            if(is_null($tpl)){
                $tpl = METHOD.'.html';
            }else{
            $tpl = str_replace(".html","",$tpl).".html";
            }
            if(!is_file($this->smarty->template_dir.'/'.$tpl)){
                error("模板文件:".$this->smarty->template_dir.'/'.$tpl."不存在");
            }
            $this->smarty->display($tpl);
        }
        protected function success($msg,$url=null){
            echo "<div style='border:solid 3px #FF0000;width:600px;padding:30px;font-size:14px;font-family: 微软雅黑;'>
            {$msg}
            </div>";
            if($url) {
                echo "<script>
                 setTimeout(function() {
                   location.href='{$url}';
                 },3000);
            </script>
            <h3>3秒返回上一页{$url}</h3>";
            }else{
                echo "<script>
                 setTimeout(function() {
                    window.history.go(-1);
                 },3000);
               
            </script>
                <h3>3秒返回上一页</h3>";
            }

        }
        protected function error($msg,$url=null){
            echo "<div style='border:solid 3px #000;width:600px;padding:30px;font-size:14px;font-family: 微软雅黑;'>
            {$msg}
            </div>";
            if($url) {
                echo "<script>
                 setTimeout(function() {
                   location.href='{$url}';
                 },3000);
            </script>
            <h3>3秒返回上一页{url}</h3>";
            }else{
                echo "<script>
                 setTimeout(function() {
                    window.history.go(-1);
                 },3000);
               
            </script>
                <h3>3秒返回上一页</h3>";
            }
        }
        //==============以下代码为不使用smarty时的display与assign自定义调用方式
//        private $_vars=array();//保存变量
//        public function __construct(){
//            if(method_exists($this,"__init")){
//                $this->__init();
//            }
//    }
//        protected function assign($name,$value){
//            $this->_vars[$name]=$value;
//        }
//        protected function display($tpl=null){
//            if(is_null($tpl)){
//                $tpl = METHOD.'.html';
//            }else{
//            $tpl = str_replace(".html","",$tpl).".html";
//            }
//            $tplFile = PATH_TPL.'/'.CONTROL.'/'.$tpl;
////            echo $tpl
//            if(!is_file($tplFile)){
//                error("模板文件{$tplFile}不存在");
//            }else{
//                extract($this->_vars);
//                include $tplFile;
//            }
//        }
    }