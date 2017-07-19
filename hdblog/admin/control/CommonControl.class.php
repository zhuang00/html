<?php
class CommonControl extends Control
{
    function __init() {
        //验证登录后台权限
        $this->auth();
        header("content-type:text/html;charset=utf-8;");
        $this->assign("__control__",__CONTROL__);
        $this->assign("__web__",__WEB__);
//        $conf = get_defined_constants(true);
//        p($conf['user']);exit;
    }
    private function auth(){
        session_start();
        //login控制器不验证
        if(CONTROL=='login')return;
        //其他控制器验证
        if(!$_SESSION['admin']){
            $this->error("你没有访问权限",__WEB__.'/admin.php?c=login');exit;
        }
    }

}