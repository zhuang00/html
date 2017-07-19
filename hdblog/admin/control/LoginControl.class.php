<?php
    class LoginControl extends CommonControl{
        //
        function index(){
            $this->display();
        }
        function login(){
            $db =M("hd_admin");
            $username = htmlspecialchars(strip_tags($_POST['admin_username']));
            $password = $_POST['admin_password'];
            $data= $db->query("select * from hd_admin where admin_username='$username'");
            if($data){
                if($data[0]['admin_password']==md5($password)){
                    session_start();
                    $_SESSION['admin']=$data[0]['admin_id'];
                    $_SESSION['username']=$data[0]['admin_username'];
                    $this->success('登录成功',__WEB__.'/admin.php');

                }else{
                    $this->error('密码不正确');
                }
            }else{
                $this->error('帐号不存在');
            }
        }
        function out(){
            session_unset();
            session_destroy();
            $this->success("退出成功,3秒后进入首页",__WEB__);
        }
    }