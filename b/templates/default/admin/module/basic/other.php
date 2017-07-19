{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>多语言版</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">启用多语言版：</td>
				<td>
					<input type="radio" name="multilingual" onClick="set_multilingual(1)" {if $S_MULTILINGUAL == 1}checked{/if} /> 开启&nbsp;&nbsp;
					<input type="radio" name="multilingual" onClick="set_multilingual(0)" {if $S_MULTILINGUAL == 0}checked{/if} /> 关闭
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
					<input type="radio" name="filter" onClick="set_varia('about_filter',1)" {if $about_filter == 1}checked{/if} /> 是&nbsp;&nbsp;
					<input type="radio" name="filter" onClick="set_varia('about_filter',0)" {if $about_filter == 0}checked{/if} /> 否
				</td>
			</tr>
			<tr>
				<td>截取字符串长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('about_len',this.value)" value="{$about_len}" /> 个字符</td>
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
				<td><input type="text" class="text2" onBlur="set_varia('index_img_list_len',this.value)" value="{$index_img_list_len}" /> 行</td>
			</tr>
			<tr>
				<td>首页文章列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_art_list_len',this.value)" value="{$index_art_list_len}" /> 行</td>
			</tr>
			<tr>
				<td>图片页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('img_list_len',this.value)" value="{$img_list_len}" /> 张</td>
			</tr>
			<tr>
				<td>文章页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('art_list_len',this.value)" value="{$art_list_len}" /> 行</td>
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
					最大宽度：<input type="text" class="text2" onBlur="set_varia('x_img_width',this.value)" value="{$x_img_width}" /> px &nbsp;&nbsp;
					最大高度：<input type="text" class="text2" onBlur="set_varia('x_img_height',this.value)" value="{$x_img_height}" /> px
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
					<input type="radio" name="filter" onClick="set_varia('show_booking',1)" {if $show_booking == 1}checked{/if} /> 开启&nbsp;&nbsp;
					<input type="radio" name="filter" onClick="set_varia('show_booking',0)" {if $show_booking == 0}checked{/if} /> 关闭
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
		<form id="form_set_sentmail" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="save_sentmail" />
			<table class="table">
				<tr>
					<td width="30%">启用邮件通知功能：</td>
					<td>
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',1)" {if $sentmail == 1}checked{/if} /> 开启&nbsp;&nbsp;
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',0)" {if $sentmail == 0}checked{/if} /> {$lang.close}</td>
				</tr>
				<tr>
					<td>发件SMTP服务器：</td>
					<td><input name="smtp" type="text" class="text" maxlength="200" value="{$sentmail_smtp}" /></td>
				</tr>
				<tr>
					<td>发件邮箱：</td>
					<td><input name="send" type="text" class="text" maxlength="200" value="{$sentmail_send}" /></td>
				</tr>
				<tr>
					<td>发件邮箱密码：</td>
					<td><input name="password" type="password" class="text" maxlength="200" value="{$sentmail_password}" /></td>
				</tr>
				<tr>
					<td>收件邮箱：</td>
					<td><input name="receive" type="text" class="text" maxlength="200" value="{$sentmail_receive}" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="button" type="submit" value="{$lang.edit}" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、邮件通知功能的目前的主要用途是：当有访客在网站提交留言或调查问卷时，系统自动使用发件邮箱发送邮件通知管理员。<br />
		2、SMTP服务器地址一般形如smtp.163.com，但并不是所有SMTP服务器地址都是这种形式，163邮箱经多次测试发送邮件正常，建议使用。<br />
		3、如果您所填写的邮件信息不正确，请不要启用邮件通知功能，否则可能导致前台在线留言和在线调查功能无法正常使用。
	</div>
</div>
{literal}
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
{/literal}