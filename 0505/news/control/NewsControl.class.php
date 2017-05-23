<?php
    //$oldumask=umask(0);
class NewsControl extends Control
{
    //添加文章
    public function addshow() {

        $this->display("addshow.html");
    }

    function add() {
        //编辑器上传过程 编辑器选图-》php脚本（完成图片储存）-》把储存到服务器的文件URL返回给编辑器-》
//        p($_POST);
        $data = include "db.php";
        $data[]= $_POST;
        $data = "<?php \n return ".var_export($data,true).";\n?>";
        file_put_contents("db.php",$data);
        header("location:http://localhost/0505/news/index.php?control=index&action=index");
    }


    //删除文章
    function del() {
        echo '删除';
    }

    //编辑文章
    function edit() {
        echo '修改';
    }
    public function upload(){
        $up = $_FILES['hdupload'];
        if(is_uploaded_file($up['tmp_name'])){
            $uploadDir="upload/".@date('Ym');//上传文件储存目录
            is_dir($uploadDir)||mkdir($uploadDir,0777,true);//创建目录
           // umask($oldyumask);
            $toFile=time().mt_rand(1,1000).strrchr($up['name'],'.');
            if(move_uploaded_file($up['tmp_name'],$uploadDir.'/'.$toFile)){
                echo json_encode(array("error"=>0,"url"=>"http://localhost/0505/news/".$uploadDir."/".$toFile));
            }
        }
    }

}