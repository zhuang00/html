<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script>
        $(function(){
            $.get("3.1.php","webname=houdunwang.com",function(data){
                alert(data);
            })
        })
    </script>
</head>
<body>

</body>
</html>