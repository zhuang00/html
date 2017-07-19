{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>留言列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>留言内容</td>
				<td width="80px">通过审核</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$message name=message item=item}
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div>
						【{$item.type}】&nbsp;
						<b>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}：</b><span>{$item.title}</span>
						&nbsp;[{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
					</div>
					<div>{$item.text}</div>
					{if $item.reply != ''}
					<div><span class="red">管理员回复：</span>{$item.reply}</div>
					{/if}
				</td>
				<td>
					{if $item.show != 2}
					<input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','message',{$item.id},this.checked)" />
					{else}悄悄话{/if}
				</td>
				<td>
					<a href="{url channel=$global.channel mod='message_edit' id=$item.id}">[回复]</a>
					<a onClick="del('message|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="3">
					{$prefix = $global.channel|cat:'/mod-message_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
