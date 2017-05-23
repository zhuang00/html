<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-1.7.2.js"></script>
    <script type="text/javascript" src="uploadify/jquery.uploadify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="uploadify/uploadify.css" />
    <style type="text/css">
        #pics{border:solid 1px #dcdcdc;padding:20px;height:auto;overflow:hidden;}
        #pics ul{list-style:none;}
        #pics ul li{float:left;padding: 10px;border: solid 1px #dcdc;margin-right:5px;position:relative;}
        #pics ul li span{display:block; position:absolute;top:5px;right:6px;background#333;color:#fff;padding:3px;cursor:pointer;}
    </style>
    <script>
        <?php session_start(); ?>
        $(function() {
            $('#file_upload').uploadify({
                'swf'      : 'uploadify/uploadify.swf',//通过这个swf完成上传
                'uploader' : '5.1.php',//服务器端脚本
                'formData':{'sessid':"<?php echo session_id();?>"},
                'buttonText':"houdunwang",
                'fileTypeDesc' : 'Image Files',
                'fileTypeExts' : '*.gif; *.jpg; *.png',
                'onUploadSuccess' : function(file, data, response) {
                      eval('data='+data);
                      if(data['error']==0){
                          var pic ="<li><span src='"+data['url']+"'>删除</span><img  width='100' height='100' src='"+data['url']+"'/>\
                           <input type='hidden' name='pics[]' value='"+data['url']+"'/>\
                              </li>";
                          $("#pics ul").append(pic);
                      }else{
                          alert("上传失败");
                      }
//                    alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                }

                // Put your options here
            });
        });
        //异步删除图片
        $(function () {
          $("#pics ul li span").live("click",function(){
              var path = $(this).attr("src");//图片的路径
              var li = $(this).parent("li");//当前图片的li标签
//              alert(path);
              $.ajax({
                  "url":"5.2.php",//删除图片的ＰＨＰ脚本
                  data:"file="+path,
                  success:function(data){
                      if(data==1){
                          li.remove();
                      }
                  }
               })
          })
        })
    </script>
</head>
<body>
    <form action="5.3.php" method="post"/>
    <table border="1" width="600">
        <tr>
            <td width="200">商品名称:</td>
            <td><input type="text" name="title"/><br/></td>
        </tr>
        <tr>
            <td>产品图片:</td>
            <td>
                <input type="file" name="file_upload" id="file_upload" />
                <div id="pics">


                    <ul>

                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td>产品描述:</td>
            <td>
                <textarea rows="6" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit"/>
            </td>
        </tr>
</body>
</html>