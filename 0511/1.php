<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script>
//        $(function(){
//            $.ajax({
//                url:"2.php",
//                type:"",
//                success:function(data){
//                    $("#d1").html(data);
//                }
//            })
//        })
        $(function(){

        })
        $(function(){
//            alert($("#form1222255").length);
            $("#form1").submit(function(){
//                var formData = $(this).serialize();
//                alert(formData);
                 $.ajax({
                     url:"2.php",
                     type:"post",
                     data:$("#form1").serialize(),
                     dataType:"json",
                     success:function(data){

//                            eval("_data="+data);
//                           for(var i in _data){
//                               document.write(i+"=>"+_data[i]+"<br/>");
//                           }
//                            alert({username:'hdphp',msg:'ok'});
                         if(data['error']==0){

                                alert("注册成功");
                                var username=$("input[name='username']").val();
                                $("#d1").empty().html("欢迎"+data['username']+"注册成功");
                            }else{
                                alert("注册失败")
                            }
                     }
                 })
                return false;
            })
        })
    </script>
</head>
<body>
<div id="d1">
<form id="form1">
    用户名:<input type="text" name="username"/><br/>
    密码:<input type="password" name="password"/><br/>
    <input type="submit"/>
</form>
</div>
</body>
</html>