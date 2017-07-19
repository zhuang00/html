<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:17:29
         compiled from "templates/default/admin\module\article\add.php" */ ?>
<?php /*%%SmartyHeaderCode:3240159562539dd7e61-53386025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507c95a55c4fe48ddbedbee21a9fb22a72ed5d89' => 
    array (
      0 => 'templates/default/admin\\module\\article\\add.php',
      1 => 1446085034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3240159562539dd7e61-53386025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
    'cat_list' => 0,
    'item' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562539e7040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562539e7040')) {function content_59562539e7040($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_article'];?>
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
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_cat'];?>
：</td>
					<td>
						<select name="v_cat_id">
							<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['please_select'];?>
</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['grade']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>&nbsp;<?php endfor; endif; ?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
：</td>
					<td><input name="v_author" type="text" class="text" maxlength="" value="" /></td>
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
</div><?php }} ?>