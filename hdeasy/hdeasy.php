<?php
    /*
    *框架入口类
    *@package core
    *@author zhuang
    */
    final class HDEasy{
        static public function run(){
            self::setConst();//定义常量
            self::createCoreDir();//创建网站的基本目录
            self::loadCoreFile();
            Application::run();//运行应用
        }
        static private function setConst(){
            define("NOW",$_SERVER['REQUEST_TIME']);//定义当前时间
            define("PATH_HDEASY_PATH",dirname(__FILE__));//框架的根目录
            define("PATH_ROOT",dirname($_SERVER['SCRIPT_FILENAME']));//网站的根目录
            define("PATH_TEMP",PATH_ROOT.'/temp');//临时文件夹

        }
        /*
       * 加载核心文件
       */
        static private function loadCoreFile(){
            require PATH_HDEASY_PATH."/core/functions.php";//加载函数库
            require PATH_HDEASY_PATH."/core/Application.class.php";//加载应用处理类
        }
        /*
         * 创建网站的基本目录
         */
        static private function createCoreDir(){
            if(!is_dir(PATH_TEMP)){
                @mkdir(PATH_TEMP)||die(PATH_TEMP."目录创建失败,请修改权限");
            }
        }
    }
    HDEasy::run();