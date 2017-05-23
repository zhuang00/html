<?php
    class demo{
        static $db=false;//定义静态变量
        static $obj=false; //对象
        private function __construct() {
            echo 2;
        }
        //工厂方法
        public static function factory(){
            if(self::$obj===false){
                self::$obj= new demo();
            }
            return self::$obj;
        }
        function show(){
            echo self::$db;
        }
    }

        $obj1 = demo::factory();
        $obj2 = demo::factory();
        $obj3 = demo::factory();
        $obj4 = demo::factory();
//    demo::$db ="111";
//    demo::show();
//    $obj1 = new demo;
//    $obj2 = new demo;
//    $obj3 = new demo;
//    $obj4 = new demo;

    ?>