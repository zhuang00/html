<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 19:43:48
         compiled from "templates/default/admin\module\service\user_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:7524595639746a5cf4-99070810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4eeb36fe7fa3d633c1860f2d2de544dcf0c19d3' => 
    array (
      0 => 'templates/default/admin\\module\\service\\user_sheet.php',
      1 => 1446681401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7524595639746a5cf4-99070810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'users' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956397475599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956397475599')) {function content_5956397475599($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>用户管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td>真实姓名</td>
				<td>E-mail</td>
				<td>QQ</td>
				<td>电话</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['real_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'service','mod'=>'user_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del_user('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-user_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function del_user(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/service/","cmd=del_user&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>