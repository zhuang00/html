<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:38
         compiled from "templates/default/admin\module\goods\add.php" */ ?>
<?php /*%%SmartyHeaderCode:402659562362716559-10947195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f4624be3c4e216caeec8d015df29a122d1b9d3' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\add.php',
      1 => 1446233565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402659562362716559-10947195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
    'goods_sn' => 0,
    'cat_list' => 0,
    'item' => 0,
    'upl_index' => 0,
    'upl_date' => 0,
    'att' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562362823e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562362823e1')) {function content_59562362823e1($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_goods'];?>
</span></div>
	<div class="main">
		<form id="form_add_goods" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_goods" />
			<table class="table">
				<tr>
					<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_name'];?>
：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="" /></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_sn'];?>
：</td>
					<td><input name="v_sn" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
" /></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_cat'];?>
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
				<?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(1, null, 0);?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_img'];?>
：</td>
					<td>
						<span id="show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
"></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/<?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/','show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
','img_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
',1)" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_img'];?>
" />
						<input name="img_path" id="img_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
" type="hidden" maxlength="250" value="" />
					</td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(2, null, 0);?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['subsidiary_img'];?>
：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/<?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/','','more_img',0)" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_img'];?>
" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_multiple'];?>

						<div style="padding:5px 0 0 0;"><input name="more_img" id="more_img" type="text" class="text" value="" /></div>
					</td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_price'];?>
：</td>
					<td><input name="v_price" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['att']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['att_name'];?>
：</td>
					<td><input name="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_code'];?>
" type="text" class="text" value="" /></td>
				</tr>
				<?php } ?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_text'];?>
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
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['help_1'];?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['help_2'];?>

	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<?php echo $_smarty_tpl->getSubTemplate ('module/goods/box.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-------------------------- BOX --------------------------><?php }} ?>