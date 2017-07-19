<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 19:43:55
         compiled from "templates/default/admin\module\about\edit.php" */ ?>
<?php /*%%SmartyHeaderCode:324175956397ba8eab1-80681445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9895282ec0a6046e1db8c46387bcb47cd79a9d5' => 
    array (
      0 => 'templates/default/admin\\module\\about\\edit.php',
      1 => 1446085105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324175956397ba8eab1-80681445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956397bb32bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956397bb32bd')) {function content_5956397bb32bd($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_about'];?>
</span></div>
	<div class="main">
		<form id="form_edit_art" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<input name="v_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['global']->value['id'];?>
" />
			<table class="table">
				<tr>
					<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_title'];?>
：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" /></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_text'];?>
：</td>
					<td>
						<div class="editor">
							<?php echo $_smarty_tpl->getSubTemplate ('module/editor.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
" />
					</td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
：</td>
					<td><input class="text" name="v_description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onclick="go_back()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['go_back'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php }} ?>