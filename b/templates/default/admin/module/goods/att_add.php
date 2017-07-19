{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.add_goods_att}</span></div>
	<div class="main">
	<form id="form_add_att" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_att" />
		<table class="table">
			<tr>
				<td>{$lang.en_name}：</td>
				<td><input name="att_code" type="text" class="text" maxlength="50" /></td>
			</tr>
			<tr>
				<td>{$lang.cn_name}：</td>
				<td><input name="att_name" type="text" class="text" maxlength="50" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="submit" value="{$lang.submit}" />
						<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
					</div>
				</td>
			</tr>
		</table>
	</form>
	</div>
</div>