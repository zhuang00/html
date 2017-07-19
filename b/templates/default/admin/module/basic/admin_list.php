{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>管理员帐号</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td width="50px">级别</td>
				<td>上次登录时间</td>
				<td>最后登录时间</td>
				<td width="170px">{$lang.operate}</td>
			</tr>
			{foreach from=$admin name=admin item=item}
			<tr>
				<td>{$item.username}</td>
				<td>{$item.grade}</td>
				<td>{if $item.prev_login}{$item.prev_login|date_format:"%Y-%m-%d %H:%M:%S"}{else}0{/if}</td>
				<td>{if $item.last_login}{$item.last_login|date_format:"%Y-%m-%d %H:%M:%S"}{else}0{/if}</td>
				<td>
					{if $me.id == $item.id || $me.grade < $item.grade}
					<a onclick="jump('{url channel=$global.channel mod='admin_edit' id=$item.id}')">[修改密码]</a>
					{else}
					<a onclick="no_power()">[修改密码]</a>
					{/if}
					{if $me.grade < $item.grade}
					<a href="{url channel=$global.channel mod='admin_power' id=$item.id}">[权限设置]</a>
					<a onclick="del_admin('{$item.id}')">[{$lang.delete}]</a>
					{else}
					<a onclick="no_power()">[权限设置]</a>
					<a onclick="no_power()">[{$lang.delete}]</a>
					{/if}
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="5">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='admin_add'}')" value="{$lang.add}" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
{literal}
<script language="javascript">
	function no_power()
	{
		alert("对不起，您只能对下级帐号进行操作");
	}
	function del_admin(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/basic/","cmd=del_admin&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
{/literal}