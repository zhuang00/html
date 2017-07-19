<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:27
         compiled from "templates/default/admin\module\service\research_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:222155957691f676734-50726369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cf50f0b475768d9375a5d2d2e4ce3011fb1105' => 
    array (
      0 => 'templates/default/admin\\module\\service\\research_sheet.php',
      1 => 1446227942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222155957691f676734-50726369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
    'question' => 0,
    'item' => 0,
    'research' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957691f74d4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957691f74d4e')) {function content_5957691f74d4e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>问卷调查</span></div>
	<div class="main">
		<form id="form_edit_question" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_question" />
			<table class="table sheet">
				<tr class="h">
					<td>问题</td>
					<td>表单类型</td>
					<td>答案选项</td>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['question']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td><input name="question[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
" /></td>
					<td>
						<select name="input_type[]" >
							<option value="radio" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='radio'){?>selected<?php }?>>单选框</option>
							<option value="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='checkbox'){?>selected<?php }?>>复选框</option>
							<option value="text" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='text'){?>selected<?php }?>>文本框</option>
						</select>
					</td>
					<td><input name="answer[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['answer'];?>
" /></td>
					<td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><span class="red" onClick="del('varia|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="4">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'question_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
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
	<div class="head"><span>调查结果</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>访客提交问卷</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div><b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?>匿名用户<?php }?></b>&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
&nbsp;提交问卷：</div>
					<div><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div>
				</td>
				<td>
					<a onClick="del('research|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="2">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-research_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、答案选项之间使用|号隔开，个数不限，例如“答案一|答案二|答案三”。
	</div>
</div>
<?php }} ?>