<?php
/**
 * Created by PhpStorm.
 * User: zhuang
 * Date: 17-5-7
 * Time: 下午12:37
 */
    class Control{
        //提供一个界面
        protected function display($tpl){
            include "tpl/".CONTROL."/".$tpl;

        }


    }