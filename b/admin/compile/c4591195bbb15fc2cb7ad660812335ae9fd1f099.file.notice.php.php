<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:26
         compiled from "templates/default/admin\module\service\notice.php" */ ?>
<?php /*%%SmartyHeaderCode:301515957691e372768-73115604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4591195bbb15fc2cb7ad660812335ae9fd1f099' => 
    array (
      0 => 'templates/default/admin\\module\\service\\notice.php',
      1 => 1446681901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301515957691e372768-73115604',
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
  'unifunc' => 'content_5957691e3e7a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957691e3e7a8')) {function content_5957691e3e7a8($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>网站公告</span></div>
	<div class="main">
		<form id="form_edit_notice" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_notice" />
			<table class="table">
				<tr>
					<td width="100px">网站公告：</td>
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