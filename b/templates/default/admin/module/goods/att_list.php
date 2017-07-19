{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.goods_att}</span></div>
	<div class="main">
		<form id="form_edit_att" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="edit_att" />
		<table class="table sheet">
			<tr class="h">
				<td>{$lang.en_name}</td>
				<td>{$lang.cn_name}</td>
				<td>{$lang.operate}</td>
			</tr>
			{foreach from=$att name=att item=item}
			<tr>
				<td><input name="att_code[]" type="text" class="text" maxlength="50" value="{$item.att_code}" /></td>
				<td><input name="att_name[]" type="text" class="text" maxlength="50" value="{$item.att_name}" /></td>
				<td><input name="att_id[]" type="hidden" value="{$item.att_id}" /><span class="span_bt" onClick="del('att_goo|{$item.att_id}')">[{$lang.delete}]</span></td>
			</tr>
			{/foreach}
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="{$lang.edit}" />
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='att_add'}')" value="{$lang.add}" />
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
		{$lang.help_3}
	</div>
</div>
