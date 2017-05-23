<?php

//    class demo{
//        function say($a){
//
//        }
//        function say($a,$b){
//
//        }
//    }
//    $obj = new demo;
//    $boj->say(1);
//    $obj->say("a","b");
    include "../functions.php";
    class demo
    {
        function show() {
            switch(count(func_get_args())) {
                case 1:
                    return $this->showOne();
                    break;
                case 2:
                    return $this->showAll();
                    break;
            }
        }

        private function showOne() {
            return __METHOD__;
        }

        private function showAll() {
            return __METHOD__;
        }
    }
    $obj =new demo;
    echo $obj->show(1);
    echo $obj->show(2,3);
?>