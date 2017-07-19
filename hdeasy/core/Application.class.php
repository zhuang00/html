<?php
    //应用处理类
    final class Application{
        static public function run(){
            spl_autoload_register(array(__CLASS__,"autoload"));//注册自动加载方法
            self::setConst();
            self::createAppPath();//创建应用基本目录
            self::init();//初次化应用
            self::loadConfig();//加载配置项
            self::appRun();//运行应用
            self::debug();//调试模式
        }
        //调试模式
        static private function debug(){
            if(C('DEBUG')) {
                Debug::show();
            }
        }
        //注册自动加载方法
        static public function autoload($className){
           if(substr($className,-7)=="Control" && strlen($className)>7){
               $classFile = PATH_APP.'/control/'.$className.'.class.php';
//               echo $classFile;
           }else {
               $classFile = PATH_HDEASY_PATH . '/class/' . $className . '.class.php';
           }
            if(is_file($classFile)){
                include $classFile;
            }else{
                die('类文件'.$classFile."不存在");
            }
        }
        static private function createAppPath(){
            $dirs =array(
                'app'=>PATH_APP,//应用文件夹
                "control"=>PATH_APP.'/control',
                "config"=>PATH_APP.'/config',
                "tpl"=>PATH_APP.'/tpl',
                "model"=>PATH_APP.'/model'
            );
            foreach($dirs as $d){
                is_dir($d) ||mkdir($d);
            }
        }
        //定义常量
        static private function setConst() {
            //$_GET['c'] 代表控制器
            //$_GET['m'] 代表方法
            if (!defined("PATH_APP")) {
                define("PATH_APP", PATH_ROOT . '/' . APP);//应用的文件夹
            }
            $control = isset($_GET['c']) ? $_GET['c'] : 'index';
            $method = isset($_GET['m']) ? $_GET['m'] : 'index';
            define("CONTROL", $control);
            define("METHOD", $method);
            define("PATH_CONTROL", PATH_APP . '/' . CONTROL);//控制器目录
            define("PATH_TPL", PATH_APP . '/tpl');
            define("__ROOT__", "http://" . $_SERVER['HTTP_HOST']);//网站根地址
            define("__WEB__", __ROOT__ . DIRNAME($_SERVER['SCRIPT_NAME']));
            define("__HDEASY__", __ROOT__ . str_replace($_SERVER['DOCUMENT_ROOT'], '', PATH_HDEASY_PATH));
            define("__APP__", __ROOT__ . str_replace($_SERVER['DOCUMENT_ROOT'], '', PATH_APP));
            define("__TPL__", __ROOT__ . str_replace($_SERVER['DOCUMENT_ROOT'], '', PATH_TPL));
            define("__CONTROL__", __ROOT__ .$_SERVER['SCRIPT_NAME'].'?c='.CONTROL);
        }
        //加载配置项
        static private function loadConfig(){
            C(include PATH_APP.'/config/config.php');
//            p(PATH_APP.'/config/config.php');
        }
        //初次化应用
        static private function init(){
            $config = PATH_APP.'/config/config.php';//应用配置文件
            if(is_file($config)){
                return false;
            }
$indexControl=<<<str
<?php    
class indexControl extends Control{
    function __init(){
        header("content-type:text/html;charset=utf-8;");
    }
    function index(){    
echo"<div style='border:solid 1px #dcdcdc;padding:20px,width:600px;font-size:35px;text-align:center'>我的博客</div>";}}?>
str;
        copy(PATH_HDEASY_PATH.'/core/config.php',PATH_APP.'/config/config.php');//复制配置文件
        file_put_contents(PATH_APP."/control/IndexControl.class.php",$indexControl);
        }

        static private function appRun(){
                $controlFile = PATH_APP.'/control/'.ucfirst(CONTROL).'Control.class.php';//控制器文件
//                echo $controlFile;
                if(is_file($controlFile)){
                    include $controlFile;//加载控制器文件
                    $controlClass = CONTROL.'Control';//控制器的类
                    if(!class_exists($controlClass)){
                        die("控制器类{$controlClass}不存在");
                    }
                    $controlObj = new $controlClass;//实例化出控制器对象
              }else{
                    $hdEmptyClassFile = PATH_APP.'/control/'.'HdEmptyControl.class.php';//空控制器文件
                    if(is_file($hdEmptyClassFile)) {
                        include $hdEmptyClassFile;
                        $controlObj = new HdEmpty();
                    }else{
                        die("控制器类不存在");
                    }
                }
                $method =METHOD;
                if(!method_exists($controlObj,$method)){
                    //空方法
                    if(method_exists($controlObj,"__empty")){
                        $controlObj->__empty();
                    }else {
                        header("Content-type:text/html;charset=utf8");
                        error("你访问的方法{$method}不存在");
                    }
                }else {
                    $controlObj->$method();//执行控制器方法
                }
            }

 }
