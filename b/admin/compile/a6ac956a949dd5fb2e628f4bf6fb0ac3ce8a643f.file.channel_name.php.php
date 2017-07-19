<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 10:56:18
         compiled from "templates/default/admin\module\super\channel_name.php" */ ?>
<?php /*%%SmartyHeaderCode:139059570f521e6870-26422257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ac956a949dd5fb2e628f4bf6fb0ac3ce8a643f' => 
    array (
      0 => 'templates/default/admin\\module\\super\\channel_name.php',
      1 => 1446685079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139059570f521e6870-26422257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'channel' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59570f5226771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59570f5226771')) {function content_59570f5226771($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>频道名称</span></div>
	<div class="main">
		<form id="edit_channel_name" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="edit_channel_name" />
		<table class="table sheet">
			<tr class="h">
				<td>字符名</td>
				<td>名称</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
				<td><input name="name[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></td>
			</tr>
			<?php } ?>
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div><?php }} ?>