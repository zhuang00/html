<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:25:11
         compiled from "templates/default/admin\module\file\focus_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2871359576a774e6f56-88063309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e2f9e0f61a87fd82004840ff095b1c7d85d146' => 
    array (
      0 => 'templates/default/admin\\module\\file\\focus_list.php',
      1 => 1446227942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871359576a774e6f56-88063309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'focus' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59576a775a277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59576a775a277')) {function content_59576a775a277($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>焦点图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片地址</td>
				<td>跳转地址</td>
				<td>文字说明</td>
				<td>位置标志</td>
				<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
				<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['focus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['site'];?>
</td>
				<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
" style="width:30px;" onBlur="set_order('index','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'focus_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del('picture|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'focus_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
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
		1、焦点图片可以采用相对路径（相对于网站首页）或以http://开头的网络路径。<br />
		2、可以在“图片管理”中上传图片后，复制其图片地址到此处添加焦点图片。<br />
		3、位置标志指的是页面URL中从问号后面开始的标识字符串，表示该焦点图片所在的页面，default表示全局。
	</div>
</div><?php }} ?>