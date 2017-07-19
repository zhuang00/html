{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>用户管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td>真实姓名</td>
				<td>E-mail</td>
				<td>QQ</td>
				<td>电话</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$users name=users item=item}
			<tr>
				<td>{$item.username}</td>
				<td>{$item.real_name}</td>
				<td>{$item.email}</td>
				<td>{$item.qq}</td>
				<td>{$item.tel}</td>
				<td>
					<a href="{url channel='service' mod='user_edit' id=$item.id}">[{$lang.edit}]</a>
					<a onClick="del_user('{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="7">
					{$prefix = $global.channel|cat:'/mod-user_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
{literal}
<script language="javascript">
	function del_user(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/service/","cmd=del_user&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
{/literal}