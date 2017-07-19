<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:35
         compiled from "templates/default/admin\module\basic\contact_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1458259562d376f80b1-58375734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0cadfecd471bb61600e74200a66c05f60e7de4' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\contact_list.php',
      1 => 1445969434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458259562d376f80b1-58375734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
    'contact' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d37778f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d37778f5')) {function content_59562d37778f5($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>联系方式</span></div>
	<div class="main">
		<form id="form_edit_contact" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_contact" />
			<table class="table sheet">
				<tr class="h">
					<td>提示词</td>
					<td>内容</td>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td><input name="cue[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cue'];?>
" /></td>
					<td><input name="content[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
" /></td>
					<td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><span class="span_bt" onClick="del('varia|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="3">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'contact_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<!-- 新秀 --><?php }} ?>