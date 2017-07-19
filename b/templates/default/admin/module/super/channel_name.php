{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>频道名称</span></div>
	<div class="main">
		<form id="edit_channel_name" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="edit_channel_name" />
		<table class="table sheet">
			<tr class="h">
				<td>字符名</td>
				<td>名称</td>
			</tr>
			{foreach from=$channel name=channel item=item}
			<tr>
				<td><input name="id[]" type="hidden" value="{$item.id}" />{$item.code}</td>
				<td><input name="name[]" type="text" class="text" maxlength="50" value="{$item.name}" /></td>
			</tr>
			{/foreach}
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="{$lang.edit}" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>