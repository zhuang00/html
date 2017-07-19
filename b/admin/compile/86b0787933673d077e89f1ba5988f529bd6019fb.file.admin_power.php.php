<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 16:12:10
         compiled from "templates/default/admin\module\basic\admin_power.php" */ ?>
<?php /*%%SmartyHeaderCode:156505957595a121491-79718968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b0787933673d077e89f1ba5988f529bd6019fb' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\admin_power.php',
      1 => 1446162883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156505957595a121491-79718968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'global' => 0,
    'power' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957595a1a233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957595a1a233')) {function content_5957595a1a233($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>权限设置 - <?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
</span></div>
	<div class="main">
		<form id="form_admin_power" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="admin_power" />
			<input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['global']->value['id'];?>
" />
			<table class="table">
				<tr>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['power']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['power']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['power']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['power']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
					<td width="100px"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
：</td>
					<td>
						<input name="url[]" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['set']){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" />
					</td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['power']['last']){?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['power']['index']%4==0){?>
							<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
						<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['power']['index']%4==1){?>
							<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
						<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['power']['index']%4==2){?>
							<td>&nbsp;</td><td>&nbsp;</td>
						<?php }?>
					<?php }?>
					<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['power']['last']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['power']['index']%4==3){?></tr><tr><?php }?>
					<?php } ?>
				</tr>
				<tr>
					<td colspan="8">
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
</div><?php }} ?>