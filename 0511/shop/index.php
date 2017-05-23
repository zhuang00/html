<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE['username'])):?>

<strong>欢迎<?php echo $_COOKIE['username'];?> |
<a href="login.php?action=out">退出</a>
</strong>
<?php
endif;
?>
</body>
<h1>
    <a href="admin.php">进入后台</a>
</h1>
<hr/>
<h3>欢迎访问HOUDUNWANG商城，目前一件商品没有，但是请不要失望，过两天就有了</h3>
</body>
</html>