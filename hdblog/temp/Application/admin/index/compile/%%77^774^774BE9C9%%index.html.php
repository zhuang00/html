<?php /* Smarty version 2.6.30, created on 2017-07-01 03:17:49
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>HDBLOG---后台管理</title>
    <base target="iframe"/>
    <script type="text/javascript" src="<?php echo @__HDEASY__; ?>
/plugin/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @__TPL__; ?>
/static/js/index.js"></script>
    <link type="text/css" rel="stylesheet" href="./admin/tpl/static/css/index.css"/>
</head>
<body>
    <div id="top">
        <h1><?php echo $_SESSION['username']; ?>
的博客</h1>
        <a href="<?php echo $this->_tpl_vars['__web__']; ?>
" target="blank" style='
        position:absolute;right:60px;top:50px;'>查看首页</a>
        <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php?c=login&m=out" target="blank" style='
        position:absolute;right:20px;top:50px;'>退出</a>
    </div>
    <div id="left">
        <dl>
            <dt>
            栏目管理
            </dt>
            <dd>
                <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php?c=category">查看栏目</a>
            </dd>
            <dd>
                <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php?c=category&m=addshow">添加栏目</a>
            </dd>
        </dl>
        <dl>
            <dt>
                博客管理
            </dt>
            <dd>
                <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php?c=blog&m=index">查看博客</a>
            </dd>
            <dd>
                <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php?c=blog&m=addshow">发布博客</a>
            </dd>
        </dl>
        <dl>
            <dt>
                友情链接
            </dt>
            <dd>
                <a href="#">所有链接</a>
            </dd>
            <dd>
                <a href="#">审核链接</a>
            </dd>
        </dl>
        <dl>
            <dt>
                用户管理
            </dt>
            <dd>
                <a href="#">查看用户</a>
            </dd>
            <dd>
                <a href="#">添加用户</a>
            </dd>
        </dl>
    </div>
    <div id="right">
        <iframe src="http://360.cn" name="iframe"></iframe>
    </div>
</body>
</html>