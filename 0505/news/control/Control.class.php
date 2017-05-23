<?php
/**
 * Created by PhpStorm.
 * User: zhuang
 * Date: 17-5-5
 * Time: 上午11:01
 */
    class Control{
        //提供一个界面
        protected function display($tpl){
            include "tpl/".CONTROL."/".$tpl;
        }

    }