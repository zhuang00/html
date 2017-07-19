<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\index.php" */ ?>
<?php /*%%SmartyHeaderCode:143135957799221f948-42948178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d0a06bd013ad9db94761726f2a517ca60ef5af' => 
    array (
      0 => 'templates/default/index\\index.php',
      1 => 1498874745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143135957799221f948-42948178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_595779922a466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595779922a466')) {function content_595779922a466($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/index.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
    <header>
    <nav class="main">
    	<div class="logo left">
    	<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
images/logo.png" alt="红酒老刘"></a>
    	
		<?php echo $_smarty_tpl->getSubTemplate ("module/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	    <section class="banner">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/images/banner.png">
    	</section>

		<?php echo $_smarty_tpl->getSubTemplate ("module/notice.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





	
			<?php echo $_smarty_tpl->getSubTemplate ("module/goods_list.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <section class="banner1">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/images/banner1.png">
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("module/article_list.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>







	<?php echo $_smarty_tpl->getSubTemplate ("module/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>