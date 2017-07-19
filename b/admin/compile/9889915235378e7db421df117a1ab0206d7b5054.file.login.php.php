<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:27
         compiled from "templates/default/admin\module\login.php" */ ?>
<?php /*%%SmartyHeaderCode:32011595623578f4de8-99885716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9889915235378e7db421df117a1ab0206d7b5054' => 
    array (
      0 => 'templates/default/admin\\module\\login.php',
      1 => 1445975967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32011595623578f4de8-99885716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956235790c4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956235790c4e')) {function content_5956235790c4e($_smarty_tpl) {?>
<div id="login">
	<form method="post" action="<?php echo url(array('channel'=>'deal'),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="admin_login" />
		<table cellspacing="1" cellpadding="0">
			<tr>
				<td class="c title" colspan="2"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
登录</td>
			</tr>
			<tr>
				<td class="l">用户名：</td>
				<td class="r"><input class="text" name="username" type="text" /></td>
			</tr>
			<tr>
				<td class="l">密码：</td>
				<td class="r"><input class="text" name="password" type="password" /></td>
			</tr>
			<tr>
				<td class="c bt_row" colspan="2"><input class="button" type="submit" value="登录" /></td>
			</tr>
		</table>
	</form>
</div><?php }} ?>