<?php /* Smarty version 2.6.30, created on 2017-06-06 13:21:16
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'substr_d', 'index.html', 13, false),array('modifier', 'toUpper', 'index.html', 13, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php echo '
{abc}
'; ?>

<h1><?php echo $this->_tpl_vars['webname']['name']['tel']; ?>
</h1>
<h3><?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['uname'])) ? $this->_run_mod_handler('substr_d', true, $_tmp, 0, 6) : substr_d($_tmp, 0, 6)))) ? $this->_run_mod_handler('toUpper', true, $_tmp) : toUpper($_tmp)); ?>
</h3>
<h3><?php echo $_GET['page']; ?>
</h3>
<h3><?php echo @APP; ?>
</h3>
</body>
</html>