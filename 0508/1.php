<?php
      class demo{
    const PI=3.14; //类常量
    public  $c= "houdunwang";
        function func(){
            echo $this->c;
        }
    }
    class demo1 extends demo{

    }
    $obj = new demo1;
    $obj->func();

