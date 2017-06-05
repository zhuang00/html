<?php
    //应用处理类
    final class Application{
        static public function run(){
            self::setConst();
            self::createAppPath();//创建应用基本目录
            self::init();//初次化应用
            self::appRun();//
        }
        static private function createAppPath(){
            $dirs =array(
                'app'=>PATH_APP,//应用文件夹
                "control"=>PATH_APP.'/control',
                "config"=>PATH_APP.'/config',
                "tpl"=>PATH_APP.'/tpl'
            );
            foreach($dirs as $d){
                is_dir($d) ||mkdir($d);
            }
        }
        //定义常量
        static private function setConst() {
            //$_GET['c'] 代表控制器
            //$_GET['m'] 代表方法
            if(!defined("PATH_APP")) {
                define("PATH_APP",PATH_ROOT.'/'.APP);//应用的文件夹
            }
            $control = isset($_GET['c']) ?$_GET['c']: 'Index';
            $method = isset($_GET['m']) ?$_GET['m']: 'Index';
            define("CONTROL", $control);
            define("METHOD", $method);
        }

        //初次化应用
        static private function init(){
            $config = PATH_APP.'/config/config.php';//应用配置文件
            if(is_file($config)){
                return false;
            }
$indexControl=<<<str
<?php    
class IndexControl{
    function index(){    
echo"<div style='border:solid 1px #dcdcdc;padding:20px,width:600px;font-size:35px;text-align:center'>我的博客</div>";
    }
}
?>
str;
        copy(PATH_HDEASY_PATH.'/core/config.php',PATH_APP.'/config/config.php');//复制配置文件
        file_put_contents(PATH_APP."/control/IndexControl.class.php",$indexControl);
        }

        static private function appRun(){
                $controlFile = PATH_APP.'/control/'.CONTROL.'Control.class.php';//控制器文件
                if(!is_file($controlFile)){
                    die("控制器文件不存在");
              }
                include $controlFile;//加载控制器文件
                $controlClass = CONTROL.'Control';//控制器的类
            if(!class_exists($controlClass)){
                die("控制器类{$controlClass}不存在");
            }
                $controlObj = new $controlClass;//实例化出控制器对象
                $method =METHOD;
                $controlObj->$method();//执行控制器方法
            }

 }
