<?php
    echo dirname(__FILE__); //PHP 5.3 __DIR__
    class demo{
        function abc(){

        }
    }
    $obj = new demo;
    var_dump(method_exists("demo","abc"));

?>