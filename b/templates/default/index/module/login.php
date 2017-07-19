{*<?php exit();?>*}
<div class="block" id="login">
	<div class="head">
		<div class="left"></div>
		<div class="title">{if !$global.user_id}{$lang.user_login}{else}{$lang.user_center}{/if}</div>
		<div class="right"></div>
	</div>
	<div class="main">
	{if !$global.user_id}
		<form id="form_user_login" method="post" action="{url entrance=$global.entrance channel='deal'}">
			<input name="cmd" type="hidden" value="user_login"/>
			<table>
				<tr>
					<td class="l">{$lang.account}：</td>
					<td class="r"><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l">{$lang.password}：</td>
					<td class="r"><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="button" type="submit" value="{$lang.login}" />&nbsp;&nbsp;
						<input class="button" type="button" value="{$lang.register}" onclick="document.location.href='{url entrance=$global.entrance channel='user' mod='register'}'" />
					</td>
				</tr>
		</table>
		</form>
	{else}
		<table class="link">
			<tr>
				<td><a href="{url entrance=$global.entrance channel='user' mod='profile'}">{$lang.user_info}</a></td>
				<td><a href="{url entrance=$global.entrance channel='user' mod='message_sheet'}">{$lang.my_message}</a></td>
			</tr>
			<tr>
				<td><a href="{url entrance=$global.entrance channel='user' mod='comment_sheet'}">{$lang.my_comments}</a></td>
				<td><a href="{url entrance=$global.entrance channel='user' mod='booking_sheet'}">{$lang.my_booking}</a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="{url entrance=$global.entrance channel='user' mod='logout'}">{$lang.log_out}</a></td>
			</tr>
		</table>
	{/if}
	</div>
</div>
<!-- 新秀 -->
