<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:20:35
         compiled from "templates/default/admin\module\file\pic_lists.php" */ ?>
<?php /*%%SmartyHeaderCode:135155957696332ced5-70527439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3d93d33ad25ac09a426ccc24705301feec0821' => 
    array (
      0 => 'templates/default/admin\\module\\file\\pic_lists.php',
      1 => 1446683722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135155957696332ced5-70527439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'list_public' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
    'k' => 0,
    'lists' => 0,
    'type' => 0,
    'list_editor' => 0,
    'list_json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_595769633e488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595769633e488')) {function content_595769633e488($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_img'];?>
</span></div>
	<div class="main">
		<form id="form_upl_img" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>'goods'),$_smarty_tpl);?>
" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="images/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_img',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>公共图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="150px">图片预览</td>
				<td>图片地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_public']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list_public']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list_public']['index']++;
?>
			<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['list_public']['index'], null, 0);?>
			<tr>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" height="30px" /></td>
				<td><?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<span id="in_db_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">检测中</span>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
]</a>
					<a id="del_tag_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onClick="del_file('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
<div class="block">
	<div class="head"><span>频道图片 - <?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value['folder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td>images/<?php echo $_smarty_tpl->tpl_vars['type']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'pic_list','path'=>$_smarty_tpl->tpl_vars['item']->value['path_str']),$_smarty_tpl);?>
">[进入查看]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<?php } ?>
<div class="block">
	<div class="head"><span>编辑器图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_editor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td>images/editor/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'pic_list','path'=>$_smarty_tpl->tpl_vars['item']->value['path_str']),$_smarty_tpl);?>
">[进入查看]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<script language="javascript">
	var list_json = '<?php echo $_smarty_tpl->tpl_vars['list_json']->value;?>
';
</script>

<script language="javascript">
	window.onload = function get_file_id()
	{
		ajax("post","?/file/","cmd=get_file_id&type=img&json=" + list_json,
		function(data)
		{
			if(data != "")
			{
				var arr = data.split("|");
				for(var i = 0; i < arr.length; i ++)
				{
					if(arr[i] != 0)
					{
						document.getElementById("in_db_" + i).innerHTML = "ID:" + arr[i];
						document.getElementById("del_tag_" + i).style.display = "none";
					}else{
						document.getElementById("in_db_" + i).innerHTML = '<span class="red">无关</span>';
					}
				}
			}
		});
	}
</script>
<?php }} ?>