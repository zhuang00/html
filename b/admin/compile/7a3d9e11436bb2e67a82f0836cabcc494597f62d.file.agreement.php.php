<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:21
         compiled from "templates/default/admin\module\service\agreement.php" */ ?>
<?php /*%%SmartyHeaderCode:26140595769194ecff6-61274603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3d9e11436bb2e67a82f0836cabcc494597f62d' => 
    array (
      0 => 'templates/default/admin\\module\\service\\agreement.php',
      1 => 1446233565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26140595769194ecff6-61274603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957691956231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957691956231')) {function content_5957691956231($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>用户协议</span></div>
	<div class="main">
		<form id="form_edit_agreement" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_agreement" />
			<table class="table">
				<tr>
					<td width="100px">用户协议：</td>
					<td>
						<div class="editor">
							<?php echo $_smarty_tpl->getSubTemplate ('module/editor.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php }} ?>