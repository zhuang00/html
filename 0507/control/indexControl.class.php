<?php

/**
 * Created by PhpStorm.
 * User: zhuang
 * Date: 17-5-7
 * Time: 下午12:50
 */
class indexControl extends Control
{

    public function index() {
        $this->display("index.html");
//        echo "ok";
    }
    public function arc() {
        $this->display("arc.html");//家加载一个界面（视图）；
    }
}