<?php

    class demo{
        function say(){
            echo "demo say";

        }
    }
    class demo1 extends demo{
        function say(){
            parent::say();//target
            echo "demo1 say";
        }
        function __destruct() {
            // TODO: Implement __destruct() method.
            echo 3434;
        }
    }
    $obj = new demo1();
    $obj->say();
    $obj=null;
    // __call __isset __unset __get __
    echo 111;