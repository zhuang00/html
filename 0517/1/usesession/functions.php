<?php
    function _session_start(){
        if(mt_rand(1,1113)==1) {
            _session_gc();
        }
       $sessionid = isset($_COOKIE['hdsessid'])?$_COOKIE['hdsessid']:time().mt_rand(1,1000);
       $GLOBALS['sessionid'] =$sessionid;
        if(is_file("session/".$sessionid)){
            $GLOBALS['SESSION']=unserialize(file_get_contents("session/".$sessionid));
        }else{
            $GLOBALS['SESSION']= array();
        }
        //如果客户端有$_COOKIE['hdsessid']就不设置
        isset($_COOKIE['hdsessid']) ||setcookie("hdsessid",$sessionid,0,"/");
    }
    //写入SESSION
    function _session_wirte(){
        file_put_contents("session/".$GLOBALS['sessionid'],serialize($GLOBALS['SESSION']));
    }
    function _session_gc(){
        $_maxlifetime =3;
        foreach(glob("session/*") as $file){
            if(isset($GLOBALS['sessionid']) && $file==$GLOBALS['sessionid'])contunue;
            if(filemtime($file)+$_maxlifetime<time()){
                unlink($file);
            }
        }
    }
?>