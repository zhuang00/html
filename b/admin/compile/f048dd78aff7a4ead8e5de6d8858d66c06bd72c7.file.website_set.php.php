<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:36
         compiled from "templates/default/admin\module\basic\website_set.php" */ ?>
<?php /*%%SmartyHeaderCode:890959562d38ad5f82-84346983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f048dd78aff7a4ead8e5de6d8858d66c06bd72c7' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\website_set.php',
      1 => 1446563821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '890959562d38ad5f82-84346983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sinsiu' => 0,
    'global' => 0,
    'sinsiu_username' => 0,
    'sinsiu_password' => 0,
    'lang' => 0,
    'show_copyright' => 0,
    'site_admin_title' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d38ba503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d38ba503')) {function content_59562d38ba503($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['show_sinsiu']->value){?>
<div class="block">
	<div class="head"><span>新秀帐号信息</span></div>
	<div class="main">
		<form id="form_edit_sinsiu_user" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_sinsiu_user" />
			<table class="table">
				<tr>
					<td width="30%">用户名：</td>
					<td>
						<input name="sinsiu_username" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sinsiu_username']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td width="30%">密码：</td>
					<td>
						<input name="sinsiu_password" type="password" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sinsiu_password']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">注意：这里填写的是新秀帐号，而不是本网站后台管理员帐号。如果您还没有新秀帐号，<a href="http://data.sinsiu.com/?/user/mod-register/index.html" target="_blank">请点击这里注册</a></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>版权信息设置</span></div>
	<div class="main">
		<form id="form_set_copyright" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_set_copyright" />
			<table class="table">
				<tr>
					<td width="30%">去除页脚 Powered by sinsiu 字样：</td>
					<td>
						<input type="radio" name="show_copyright" <?php if ($_smarty_tpl->tpl_vars['show_copyright']->value==0){?>checked<?php }?> value="0" /> 去除&nbsp;&nbsp;
						<input type="radio" name="show_copyright" <?php if ($_smarty_tpl->tpl_vars['show_copyright']->value==1){?>checked<?php }?> value="1" /> 不去除
					</td>
				</tr>
				<tr>
					<td width="30%">修改后台标题：</td>
					<td>
						<input name="site_admin_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site_admin_title']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="check_sinsiu_user()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">注意：若隐藏后台所有“新秀”字样，包括隐藏诸如“新秀帐号信息”、“版权信息设置”等与新秀有关的表单，请到“后台-高级应用-隐藏新秀字样”中设置。</a></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<?php }?>
<div class="block">
	<div class="head"><span>网站设置</span></div>
	<div class="main">
		<form id="form_edit_website_set" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_website_set" />
			<table class="table">
				<tr>
					<td>网站标题：</td>
					<td><input name="site_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
" /></td>
				</tr>
				<tr>
					<td>企业名称：</td>
					<td><input name="site_name" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
" /></td>
				</tr>
				<tr>
					<td>ICP备案号：</td>
					<td><input name="site_record" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
" /></td>
				</tr>
				<tr>
					<td>备案号链接：</td>
					<td><input name="site_record_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" /></td>
				</tr>
				<tr>
					<td>技术支持：</td>
					<td><input name="site_tech" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
" /></td>
				</tr>
				<tr>
					<td>技术支持链接：</td>
					<td><input name="site_tech_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" /></td>
				</tr>
				<tr>
					<td>网站关键字：</td>
					<td><input name="site_keywords" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['keywords'];?>
" /></td>
				</tr>
				<tr>
					<td>网站描述：</td>
					<td><textarea class="textarea" name="site_description"><?php echo $_smarty_tpl->tpl_vars['site']->value['description'];?>
</textarea></td>
				</tr>
				<tr>
					<td>统计代码：</td>
					<td>
						<textarea class="textarea" name="statistical_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>
</textarea><br />
						<div class="sentence">
							可到&nbsp;<a href="http://www.cnzz.com/" target="_blank">http://www.cnzz.com/</a>&nbsp;获取统计代码
						</div>
					</td>
				</tr>
				<tr>
					<td>分享代码：</td>
					<td>
						<textarea class="textarea" name="share_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['share_code'];?>
</textarea><br />
						<div class="sentence">
							可到&nbsp;<a href="http://www.jiathis.com/" target="_blank">http://www.jiathis.com/</a>&nbsp;获取分享代码
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<script language="javascript">
	function check_sinsiu_user()
	{
		var obj = document.getElementById("form_edit_sinsiu_user");
		var user_name = obj.sinsiu_username.value;
		var password = obj.sinsiu_password.value;
		if(user_name != "" && password != "")
		{
			ajax("post","bridge.php","cmd=check_sinsiu_user&user_type=1&user_name=" + user_name + "&password=" + password,
			function(data)
			{
				if(data == 1)
				{
					document.getElementById("form_set_copyright").submit();
				}else{
					alert("付费会员才能去除版权标识，免费用户请不要擅自去除版权标识，以免影响网站正常使用");
				}
			});
		}else{
			alert("请先填写新秀帐号信息");
		}
	}
</script>
<?php }} ?>