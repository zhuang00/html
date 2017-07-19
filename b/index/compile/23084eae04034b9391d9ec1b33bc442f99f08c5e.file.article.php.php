<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:58:35
         compiled from "templates/default/index\article.php" */ ?>
<?php /*%%SmartyHeaderCode:44465957805b652af9-02714498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23084eae04034b9391d9ec1b33bc442f99f08c5e' => 
    array (
      0 => 'templates/default/index\\article.php',
      1 => 1498891830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44465957805b652af9-02714498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'page_title' => 0,
    'cat_name' => 0,
    'channel_title' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957805b6eb09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957805b6eb09')) {function content_5957805b6eb09($_smarty_tpl) {?>
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
	<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>

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

		<?php echo $_smarty_tpl->getSubTemplate ("module/focus.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <section class="main productlist_content news_information ">
        <div class="left">
            <h1>NEWS INFORMATION</h1>
            <h3>新闻资讯</h3>
        </div>
		<?php echo $_smarty_tpl->getSubTemplate ("module/here.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("module/article_main.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			

		<?php echo $_smarty_tpl->getSubTemplate ("module/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>