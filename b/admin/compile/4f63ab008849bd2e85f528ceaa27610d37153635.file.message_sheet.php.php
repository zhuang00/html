<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:31
         compiled from "templates/default/admin\module\service\message_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:3114559576923cbc9d8-09220544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f63ab008849bd2e85f528ceaa27610d37153635' => 
    array (
      0 => 'templates/default/admin\\module\\service\\message_sheet.php',
      1 => 1445990110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114559576923cbc9d8-09220544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'message' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59576923d6c67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59576923d6c67')) {function content_59576923d6c67($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>留言列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>留言内容</td>
				<td width="80px">通过审核</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div>
						【<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
】&nbsp;
						<b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?>匿名用户<?php }?>：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
						&nbsp;[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
]
					</div>
					<div><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['reply']!=''){?>
					<div><span class="red">管理员回复：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['reply'];?>
</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['show']!=2){?>
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','message',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" />
					<?php }else{ ?>悄悄话<?php }?>
				</td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'message_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[回复]</a>
					<a onClick="del('message|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-message_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>