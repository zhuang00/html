{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>隐藏新秀字样</span></div>
	<div class="main">
		<form id="form_hide_sinsiu" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_hide_sinsiu" />
			<table class="table">
				<tr>
					<td width="30%">隐藏后台与“新秀”相关的功能：</td>
					<td>
						<input type="radio" name="show_sinsiu" {if $show_sinsiu == 0}checked{/if} value="0" /> 隐藏&nbsp;&nbsp;
						<input type="radio" name="show_sinsiu" {if $show_sinsiu == 1}checked{/if} value="1" /> 不隐藏
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="check_sinsiu_user()" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、与“新秀”相关的功能是指：类似“新秀帐号信息”、“版权信息设置”、“隐藏新秀字样”这种需要访问新秀云端且明显提及新秀的功能。<br />
		2、确认隐藏后，本页面也将被隐藏，若要再次进入本页面，只能在浏览器上直接打开 http://您的域名/admin.php?/super/mod-hide_sinsiu/<br />
		3、在“产品管理-添加产品”页面的编辑器下方有一个下载链接，用于下载编辑器附加功能，该链接也将会被隐藏，如果您需要使用该附加功能，请先下载。
	</div>
</div>
<script language="javascript">
	var user_name = "{$sinsiu_username}";
	var password = "{$sinsiu_password}";
</script>
{literal}
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
{/literal}