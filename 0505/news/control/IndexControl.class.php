<?php

//public protected private

class IndexControl extends Control
{
    public function index() {
        $this->display("index.html");//家加载一个界面（视图）；
    }

    public function arc() {
        $this->display("arc.html");//加载首页界面
    }
}