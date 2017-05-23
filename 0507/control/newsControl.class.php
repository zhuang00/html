<?php

    class newsControl extends Control{
        public function addshow(){
            $this->display("addshow.html");
        }
        function add(){
//            p($_POST);
            $data = include "db.php";
            $data[]=$_POST;
            $data = "<?php \n return ".var_export($data,true)."; \n?>";
            file_put_contents("db.php",$data);
        }
        public function del(){
            $this->display("del.html");
        }
    }