<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:17
         compiled from "templates/default/admin\module\about\add.php" */ ?>
<?php /*%%SmartyHeaderCode:2686259562d259a9926-21364298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b41b1ff263f37a8725f1503f487672c2bfc7df' => 
    array (
      0 => 'templates/default/admin\\module\\about\\add.php',
      1 => 1446085025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2686259562d259a9926-21364298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d25a2a7c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d25a2a7c')) {function content_59562d25a2a7c($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_about'];?>
</span></div>
	<div class="main">
		<form id="form_add_art" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<table class="table">
				<tr>
					<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_title'];?>
：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="" /></td>
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
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
：</td>
					<td><input class="text" name="v_description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php }} ?>