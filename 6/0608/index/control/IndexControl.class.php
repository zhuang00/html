<?php    
class indexControl extends Control{
    function __init(){
        header("content-type:text/html;charset=utf-8;");
    }
    function index(){
        $this->display();
    }
}
?>