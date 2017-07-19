<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:31
         compiled from "templates/default/admin\module\service\comment_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:2235259576923031946-28363608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fa25c84463b4c2251c4e7878e42149ea225719' => 
    array (
      0 => 'templates/default/admin\\module\\service\\comment_sheet.php',
      1 => 1446681636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2235259576923031946-28363608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'comment' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'index_entrance' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_595769230e92e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595769230e92e')) {function content_595769230e92e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>评论列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>评论内容</td>
				<td width="80px">通过审核</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['rank']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/star.gif" /><?php endfor; endif; ?>&nbsp;
						<b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?>匿名用户<?php }?>：</b><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['index_entrance']->value,'channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['page_id']),$_smarty_tpl);?>
" target="_blank">《<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
》</a>
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
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','comment',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" />
				</td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'comment_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[回复]</a>
					<a onClick="del('comment|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-comment_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div><?php }} ?>