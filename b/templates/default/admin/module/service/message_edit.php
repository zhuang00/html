{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>回复留言</span></div>
	<div class="main">
		<form id="form_reply_mes" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="reply_mes" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td style="line-height:22px;">
						<div>
							【{$message.type}】&nbsp;
							<b>{if $message.user_name}{$message.user_name}{else}匿名用户{/if}：</b><span>{$message.title}</span>
							&nbsp;[{$message.add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
						</div>
						<div>{$message.text}</div>
					</td>
				</tr>
				<tr>
					<td>
						<textarea class="textarea" name="v_reply" style="width:700px;height:200px;">{$message.reply}</textarea>
					</td>
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