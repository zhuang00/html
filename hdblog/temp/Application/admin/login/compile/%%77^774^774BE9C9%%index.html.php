<?php /* Smarty version 2.6.30, created on 2017-07-01 02:45:32
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>博客主人登录</h1>
<form action="<?php echo $this->_tpl_vars['__control__']; ?>
&m=login" method="post">
<table border="1" width="600">
    <tr>
        <td>管理员帐号</td>
        <td>
            <input type="text" name="admin_username"/>
        </td>
    </tr>
    <tr>
        <td>登录密码</td>
        <td>
            <input type="password" name="admin_password"/>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="登录"/>
        </td>
    </tr>
</table>
</form>
</body>
</html>