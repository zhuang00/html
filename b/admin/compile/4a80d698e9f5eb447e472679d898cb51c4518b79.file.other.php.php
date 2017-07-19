<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:41
         compiled from "templates/default/admin\module\basic\other.php" */ ?>
<?php /*%%SmartyHeaderCode:1471059562d3d347938-30713292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a80d698e9f5eb447e472679d898cb51c4518b79' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\other.php',
      1 => 1446227942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471059562d3d347938-30713292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_MULTILINGUAL' => 0,
    'about_filter' => 0,
    'about_len' => 0,
    'index_img_list_len' => 0,
    'index_art_list_len' => 0,
    'img_list_len' => 0,
    'art_list_len' => 0,
    'x_img_width' => 0,
    'x_img_height' => 0,
    'show_booking' => 0,
    'global' => 0,
    'sentmail' => 0,
    'lang' => 0,
    'sentmail_smtp' => 0,
    'sentmail_send' => 0,
    'sentmail_password' => 0,
    'sentmail_receive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d3d4169e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d3d4169e')) {function content_59562d3d4169e($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>多语言版</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">启用多语言版：</td>
				<td>
					<input type="radio" name="multilingual" onClick="set_multilingual(1)" <?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value==1){?>checked<?php }?> /> 开启&nbsp;&nbsp;
					<input type="radio" name="multilingual" onClick="set_multilingual(0)" <?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value==0){?>checked<?php }?> /> 关闭
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>首页公司简介设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">是否过滤HTML标签：</td>
				<td>
					<input type="radio" name="filter" onClick="set_varia('about_filter',1)" <?php if ($_smarty_tpl->tpl_vars['about_filter']->value==1){?>checked<?php }?> /> 是&nbsp;&nbsp;
					<input type="radio" name="filter" onClick="set_varia('about_filter',0)" <?php if ($_smarty_tpl->tpl_vars['about_filter']->value==0){?>checked<?php }?> /> 否
				</td>
			</tr>
			<tr>
				<td>截取字符串长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('about_len',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['about_len']->value;?>
" /> 个字符</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>列表长度设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">首页图片列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_img_list_len',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['index_img_list_len']->value;?>
" /> 行</td>
			</tr>
			<tr>
				<td>首页文章列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_art_list_len',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['index_art_list_len']->value;?>
" /> 行</td>
			</tr>
			<tr>
				<td>图片页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('img_list_len',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['img_list_len']->value;?>
" /> 张</td>
			</tr>
			<tr>
				<td>文章页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('art_list_len',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['art_list_len']->value;?>
" /> 行</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>图片设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">缩略图设置：</td>
				<td>
					最大宽度：<input type="text" class="text2" onBlur="set_varia('x_img_width',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['x_img_width']->value;?>
" /> px &nbsp;&nbsp;
					最大高度：<input type="text" class="text2" onBlur="set_varia('x_img_height',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['x_img_height']->value;?>
" /> px
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>启用订购功能</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">启用订购功能：</td>
				<td>
					<input type="radio" name="filter" onClick="set_varia('show_booking',1)" <?php if ($_smarty_tpl->tpl_vars['show_booking']->value==1){?>checked<?php }?> /> 开启&nbsp;&nbsp;
					<input type="radio" name="filter" onClick="set_varia('show_booking',0)" <?php if ($_smarty_tpl->tpl_vars['show_booking']->value==0){?>checked<?php }?> /> 关闭
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>清除Smarty缓存</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">清除Smarty缓存：</td>
				<td>
					<input class="button" type="button" onClick="clear_cache()" value="立即清除" />
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>邮件通知设置</span></div>
	<div class="main">
		<form id="form_set_sentmail" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="save_sentmail" />
			<table class="table">
				<tr>
					<td width="30%">启用邮件通知功能：</td>
					<td>
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',1)" <?php if ($_smarty_tpl->tpl_vars['sentmail']->value==1){?>checked<?php }?> /> 开启&nbsp;&nbsp;
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',0)" <?php if ($_smarty_tpl->tpl_vars['sentmail']->value==0){?>checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
				</tr>
				<tr>
					<td>发件SMTP服务器：</td>
					<td><input name="smtp" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sentmail_smtp']->value;?>
" /></td>
				</tr>
				<tr>
					<td>发件邮箱：</td>
					<td><input name="send" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sentmail_send']->value;?>
" /></td>
				</tr>
				<tr>
					<td>发件邮箱密码：</td>
					<td><input name="password" type="password" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sentmail_password']->value;?>
" /></td>
				</tr>
				<tr>
					<td>收件邮箱：</td>
					<td><input name="receive" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['sentmail_receive']->value;?>
" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" /></td>
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
		1、邮件通知功能的目前的主要用途是：当有访客在网站提交留言或调查问卷时，系统自动使用发件邮箱发送邮件通知管理员。<br />
		2、SMTP服务器地址一般形如smtp.163.com，但并不是所有SMTP服务器地址都是这种形式，163邮箱经多次测试发送邮件正常，建议使用。<br />
		3、如果您所填写的邮件信息不正确，请不要启用邮件通知功能，否则可能导致前台在线留言和在线调查功能无法正常使用。
	</div>
</div>

<script language="javascript">
	function set_multilingual(val)
	{
		ajax("post","?/basic/","cmd=set_multilingual&val=" + val,
		function(data)
		{
			if(data == 1)
			{
				result();
				document.location.replace(document.location.href);
			}
		});
	}
	function clear_cache()
	{
		ajax("post","?/basic/","cmd=clear_cache",
		function(data)
		{
			if(data == 1) result();
		});
	}
</script>
<?php }} ?>