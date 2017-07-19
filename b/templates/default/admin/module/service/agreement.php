{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>用户协议</span></div>
	<div class="main">
		<form id="form_edit_agreement" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_agreement" />
			<table class="table">
				<tr>
					<td width="100px">用户协议：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
