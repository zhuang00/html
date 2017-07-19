<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:30
         compiled from "templates/default/admin\module\right.php" */ ?>
<?php /*%%SmartyHeaderCode:62615956235a853d64-49403387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b888ffdb5bdc9d42d15360846a6434e57e60cfe' => 
    array (
      0 => 'templates/default/admin\\module\\right.php',
      1 => 1446190050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62615956235a853d64-49403387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_power' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956235a86f2f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956235a86f2f')) {function content_5956235a86f2f($_smarty_tpl) {?>
<div id="right">
<?php if ($_smarty_tpl->tpl_vars['admin_power']->value){?>
	<div id="core">
		<?php echo $_smarty_tpl->getSubTemplate ((((('module/').($_smarty_tpl->tpl_vars['global']->value['original'])).('/')).($_smarty_tpl->tpl_vars['global']->value['mod'])).('.php'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }else{ ?>
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
</div><?php }} ?>