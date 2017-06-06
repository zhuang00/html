<?php    
class indexControl extends Control{
    function __init(){
        header("content-type:text/html;charset=utf-8;");
    }
    function index(){    
        $db =K("user");
        $user = $db->getUser(1);
        $this->assign("user",$user);
        $this->display();
    }
}
?>