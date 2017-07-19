{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加联系方式</span></div>
	<div class="main">
		<form id="form_add_contact" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_contact" />
			<table class="table">
				<tr>
					<td>提示词：</td>
					<td><input name="cue" type="text" class="text" maxlength="50" /></td>
				</tr>
				<tr>
					<td>内容：</td>
					<td><input name="content" type="text" class="text" maxlength="150" /></td>
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
<!-- 新秀 -->