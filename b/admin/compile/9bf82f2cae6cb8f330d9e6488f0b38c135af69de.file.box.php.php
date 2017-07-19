<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:38
         compiled from "templates/default/admin\module\goods\box.php" */ ?>
<?php /*%%SmartyHeaderCode:2963159562362847097-47405411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf82f2cae6cb8f330d9e6488f0b38c135af69de' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\box.php',
      1 => 1445969452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2963159562362847097-47405411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956236285a92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956236285a92')) {function content_5956236285a92($_smarty_tpl) {?>
<div class="box" id="upl_img">
	<div class="head">
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_img'];?>
</div>
		<div class="close" onClick="hide_box('upl_img')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</div>
	</div>
	<form id="form_upl_img" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
" target="deal">
		<input name="cmd" type="hidden" value="upload" />
		<input name="dir" type="hidden" value="" />
		<input name="file" type="hidden" value="" />
		<input name="reduce" type="hidden" value="" />
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table>
			<tr>
				<td><input name="file_path" type="file" onChange="do_upload('form_upl_img',1)" /></td>
			</tr>
		</table>
	</form>
</div><?php }} ?>