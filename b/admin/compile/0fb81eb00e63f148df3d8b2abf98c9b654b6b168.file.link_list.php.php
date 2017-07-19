<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:34
         compiled from "templates/default/admin\module\service\link_list.php" */ ?>
<?php /*%%SmartyHeaderCode:30244595769267ea7c6-47129583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fb81eb00e63f148df3d8b2abf98c9b654b6b168' => 
    array (
      0 => 'templates/default/admin\\module\\service\\link_list.php',
      1 => 1445991588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30244595769267ea7c6-47129583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'link' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957692688aa6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957692688aa6')) {function content_5957692688aa6($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>友情链接</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>文字</td>
				<td>网址</td>
				<td>图片</td>
				<td>描述</td>
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
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['word'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['img']!='none'){?><img class="lin_img" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" width="88px" height="31px" /><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
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
" style="width:30px;" onBlur="set_order('index','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'link_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del('link|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'link_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div><?php }} ?>