<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:58:35
         compiled from "templates/default/index\module\here.php" */ ?>
<?php /*%%SmartyHeaderCode:124155957805b716010-74138160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0939fd3acf063264e79e07155a7da021c7879b83' => 
    array (
      0 => 'templates/default/index\\module\\here.php',
      1 => 1498876659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124155957805b716010-74138160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'channel_title' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957805b725a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957805b725a2')) {function content_5957805b725a2($_smarty_tpl) {?>
<div class="right">
	<span>您的位置：<a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>>>><?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?></span>
</div>
<div class="clear"></div>
<!-- 新秀 -->
<?php }} ?>