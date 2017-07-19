<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:25:09
         compiled from "templates/default/admin\module\file\files_list.php" */ ?>
<?php /*%%SmartyHeaderCode:887759576a750748c7-08890544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43038b0c7417fde3f6605ad36435251aad25c260' => 
    array (
      0 => 'templates/default/admin\\module\\file\\files_list.php',
      1 => 1446684184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '887759576a750748c7-08890544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'list' => 0,
    'S_FRONT_URL' => 0,
    'item' => 0,
    'k' => 0,
    'list_json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59576a750eda6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59576a750eda6')) {function content_59576a750eda6($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_file'];?>
</span></div>
	<div class="main">
		<form id="form_upl_file" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>'file'),$_smarty_tpl);?>
" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="resource/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_file',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>下载资源</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>资源地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['index']++;
?>
			<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['index'], null, 0);?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<span id="in_db_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">检测中</span>
				</td>
				<td>
					<span id="del_tag_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a onClick="del_file('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a></span>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、出于安全考虑，只能上传图片和 rar、zip、pdf 格式文件
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
		ajax("post","?/file/","cmd=get_file_id&type=file&json=" + list_json,
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
						document.getElementById("del_tag_" + i).innerHTML = "无";
					}else{
						document.getElementById("in_db_" + i).innerHTML = '<span class="red">无关</span>';
					}
				}
			}
		});
	}
</script>
<?php }} ?>