<?php
    final class Debug{
       static public function show(){
            $sqls = Model::$sqls;//获得所有查询的SQL语句
           include "../../tpl/debug.html";//debug模板
        }

    }