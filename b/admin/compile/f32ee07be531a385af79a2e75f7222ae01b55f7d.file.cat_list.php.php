<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:12
         compiled from "templates/default/admin\module\article\cat_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1689959562d2046be68-38210544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32ee07be531a385af79a2e75f7222ae01b55f7d' => 
    array (
      0 => 'templates/default/admin\\module\\article\\cat_list.php',
      1 => 1446537561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689959562d2046be68-38210544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'cat_list' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d2056201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d2056201')) {function content_59562d2056201($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_cat'];?>
</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['parent_cat'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['cat_name'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['grade'];?>
</td>
				<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_best'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
				<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['parent_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['grade'];?>
</td>
				<td style="text-align:center" onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_index'];?>
" style="width:30px;" onBlur="set_order('index','cat_art',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.value)" />
					</span>
				</td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_best']==1){?>checked<?php }?> onClick="set_order('best','cat_art',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_top']==1){?>checked<?php }?> onClick="set_order('top','cat_art',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_show']==1){?>checked<?php }?> onClick="set_order('show','cat_art',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'cat_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['item']->value['exist_child']==0){?>
					<a onClick="del('cat_art|<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }else{ ?>
					<a onClick="no_deal()">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'cat_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<script language="javascript">
	var lang_failed = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['failed'];?>
";
</script>

<script language="javascript">
	function no_deal()
	{
		alert(lang_failed);
	}
</script>
<?php }} ?>