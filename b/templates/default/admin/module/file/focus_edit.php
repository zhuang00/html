{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑焦点图片</span></div>
	<div class="main">
		<form id="form_edit_focus" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_focus" />
			<input name="v_id" type="hidden" value="{$focus.id}" />
			<table class="table">
				<tr>
					<td>图片地址：</td>
					<td><input name="v_path" type="text" class="text" maxlength="200" value="{$focus.path}" /></td>
				</tr>
				<tr>
					<td>跳转地址：</td>
					<td><input name="v_url" type="text" class="text" maxlength="200" value="{$focus.url}" /></td>
				</tr>
				<tr>
					<td>文字说明：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="{$focus.title}" /></td>
				</tr>
				<tr>
					<td>位置标志：</td>
					<td><input name="v_site" type="text" class="text" maxlength="200" value="{$focus.site}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>