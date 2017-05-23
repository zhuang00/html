<?php
    include "../functions.php";
    class demo{
        private $name;
        function __set($name, $value) {
            $vars = get_class_vars("demo");
            if(array_key_exists($name,$vars)){
                if($name=='age' && $value<100){
                    $this->$name = $value;
                    return true;
                }

            }
            return false;
        }
        function __get($name){

            return isset($this->$name)?$this->$name:null;
        }
    }
    $obj = new demo();
    $obj->name="333";
    var_dump($obj->name);