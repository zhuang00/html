<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 17:19:10
         compiled from "templates/default/admin\module\super\hide_sinsiu.php" */ ?>
<?php /*%%SmartyHeaderCode:49445957690e848946-56957071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532056c238f5ac26238343dc38bdd92a1c785145' => 
    array (
      0 => 'templates/default/admin\\module\\super\\hide_sinsiu.php',
      1 => 1446232741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49445957690e848946-56957071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'show_sinsiu' => 0,
    'lang' => 0,
    'sinsiu_username' => 0,
    'sinsiu_password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957690e8c1ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957690e8c1ae')) {function content_5957690e8c1ae($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>隐藏新秀字样</span></div>
	<div class="main">
		<form id="form_hide_sinsiu" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_hide_sinsiu" />
			<table class="table">
				<tr>
					<td width="30%">隐藏后台与“新秀”相关的功能：</td>
					<td>
						<input type="radio" name="show_sinsiu" <?php if ($_smarty_tpl->tpl_vars['show_sinsiu']->value==0){?>checked<?php }?> value="0" /> 隐藏&nbsp;&nbsp;
						<input type="radio" name="show_sinsiu" <?php if ($_smarty_tpl->tpl_vars['show_sinsiu']->value==1){?>checked<?php }?> value="1" /> 不隐藏
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="check_sinsiu_user()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
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
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、与“新秀”相关的功能是指：类似“新秀帐号信息”、“版权信息设置”、“隐藏新秀字样”这种需要访问新秀云端且明显提及新秀的功能。<br />
		2、确认隐藏后，本页面也将被隐藏，若要再次进入本页面，只能在浏览器上直接打开 http://您的域名/admin.php?/super/mod-hide_sinsiu/<br />
		3、在“产品管理-添加产品”页面的编辑器下方有一个下载链接，用于下载编辑器附加功能，该链接也将会被隐藏，如果您需要使用该附加功能，请先下载。
	</div>
</div>
<script language="javascript">
	var user_name = "<?php echo $_smarty_tpl->tpl_vars['sinsiu_username']->value;?>
";
	var password = "<?php echo $_smarty_tpl->tpl_vars['sinsiu_password']->value;?>
";
</script>

<script language="javascript">
	function check_sinsiu_user()
	{
		if(confirm("您已经详细阅读本页面的“使用说明”，并确定使用本功能吗？"))
		{
			if(user_name != "" && password != "")
			{
				ajax("post","bridge.php","cmd=check_sinsiu_user&user_type=1&user_name=" + user_name + "&password=" + password,
				function(data)
				{
					if(data == 1)
					{
						document.getElementById("form_hide_sinsiu").submit();
					}else{
						alert("付费会员才能使用本功能");
					}
				});
			}else{
				alert("您还没有填写新秀帐号，请到“基本设置-网站设置-新秀帐号信息”处填写");
			}
		}
	}
</script>
<?php }} ?>