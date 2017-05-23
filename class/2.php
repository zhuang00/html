<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="../jquery-1.7.2.js"></script>
    <script>
        $(function () {
            $("input[name='code']").blur(function(){
                var code = $(this).val().trim();//用户输入的值
                if(!code){
                    $(".codeMsg").html("验证不能为空")
                    return;
                }
                //异步验证
                $.post("3.php",{data:code},function(d){
                    if(d==1){
                        $(".codeMsg").html("验证输入正确")
                    }else{
                        $(".codeMsg").html("验证输入错误")
                    }
                })
            })
        })
    </script>
</head>
<body>
    <form action="#" method="post">
        用户名:<input type="text" name="username" /><br/>
        密码:<input type="text" name="password"/><br/>
        验证码:<input type="text" name="code"/><img src="1.php" onclick="this.src=this.src+'?rand='+new Date()"/>
        <span class="codeMsg"></span>
        <br/>
        <input type="submit"/>
    </form>
</body>
</html>