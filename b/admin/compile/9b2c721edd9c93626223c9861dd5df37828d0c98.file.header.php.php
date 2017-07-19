<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:30
         compiled from "templates/default/admin\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:300875956235a798548-41919673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2c721edd9c93626223c9861dd5df37828d0c98' => 
    array (
      0 => 'templates/default/admin\\module\\header.php',
      1 => 1446171887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300875956235a798548-41919673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav_header' => 0,
    'item' => 0,
    'S_MULTILINGUAL' => 0,
    'lang_pack' => 0,
    'S_LANG' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956235a830ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956235a830ae')) {function content_5956235a830ae($_smarty_tpl) {?>
<div id="header">
	<div class="main">
		<div id="nav">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="?/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<div class="link">
			<a href="./" target="_blank">网站首页</a>
			<a href="<?php echo url(array('channel'=>'out'),$_smarty_tpl);?>
">退出系统</a>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>
		<div class="lang">
			当前语言：
			<select onchange="change_lang(this.value)">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<option <?php if ($_smarty_tpl->tpl_vars['S_LANG']->value==$_smarty_tpl->tpl_vars['item']->value['pack_name']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['admin_entrance'];?>
<?php if ($_smarty_tpl->tpl_vars['global']->value['url']){?>?<?php echo $_smarty_tpl->tpl_vars['global']->value['url'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['chinese_name'];?>
</option>
				<?php } ?>
			</select>
		</div>
		<?php }?>
		<div class="clear"></div>
	</div>
</div><?php }} ?>