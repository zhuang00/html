{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>联系方式</span></div>
	<div class="main">
		<form id="form_edit_contact" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_contact" />
			<table class="table sheet">
				<tr class="h">
					<td>提示词</td>
					<td>内容</td>
					<td>{$lang.operate}</td>
				</tr>
				{foreach from=$contact name=contact item=item}
				<tr>
					<td><input name="cue[]" type="text" class="text" maxlength="50" value="{$item.cue}" /></td>
					<td><input name="content[]" type="text" class="text" maxlength="150" value="{$item.content}" /></td>
					<td><input name="id[]" type="hidden" value="{$item.id}" /><span class="span_bt" onClick="del('varia|{$item.id}')">[{$lang.delete}]</span></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="3">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='contact_add'}')" value="{$lang.add}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<!-- 新秀 -->