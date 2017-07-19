{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>基本信息</span></div>
	<div class="main">
		<table class="table">
			{if $show_sinsiu}
			<tr>
				<td>当前版本：</td>
				<td>{$version}</td>
				<td>最新版本：</td>
				<td><div id="ver">{$version}</div></td>
			</tr>
			{/if}
			<tr>
				<td>网站目录：</td>
				<td>{$root_dir}</td>
				<td>服务器时间：</td>
				<td>{$now}</td>
			</tr>
			<tr>
				<td>用户IP：</td>
				<td>{$user_ip}</td>
				<td>浏览器类型：</td>
				<td width="50%">{$http_user_agent}</td>
			</tr>
			<tr>
				<td>服务器名：</td>
				<td>{$server_name}</td>
				<td>服务器IP：</td>
				<td>{$server_addr}</td>
			</tr>
			<tr>
				<td>服务器端口：</td>
				<td>{$server_port}</td>
				<td>服务器版本：</td>
				<td>{$server_software}</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>使用帮助</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td><a href="{url channel='basic' mod='admin_list'}">修改密码</a></td>
				<td><a href="{url channel='basic' mod='nav_list'}">导航管理</a></td>
				<td><a href="{url channel='goods' mod='cat_list'}">产品分类</a></td>
				<td><a href="{url channel='service' mod='message_sheet'}">留言管理</a></td>
				<td><a href="{url channel='file' mod='pic_lists'}">图片管理</a></td>
			</tr>
		</table>
	</div>
</div>
{if $show_sinsiu}
{literal}
<script language="javascript">
	window.onload = function get_version()
	{
		ajax("post","?/deal/","cmd=get_version",
		function(data)
		{
			if(data.substr(0,9) == "njb_send:")
			{
				document.getElementById("ver").innerHTML = data.substr(9);
			}
		});
	}
</script>
{/literal}
{/if}