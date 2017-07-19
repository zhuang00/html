{*<?php exit();?>*}
<div class="block2" id="reg_login">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.user_login}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<form id="form_user_login" method="post" action="{url entrance=$global.entrance channel='deal'}">
			<input name="cmd" type="hidden" value="user_login"/>
			<table>
				<tr>
					<td class="l">{$lang.user_name}：</td>
					<td><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l">{$lang.password}：</td>
					<td><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td class="l"></td>
					<td>
						<input class="button" type="submit" value="{$lang.login}" />&nbsp;&nbsp;
						<input class="button" type="button" value="{$lang.register}" onclick="document.location.href='{url entrance=$global.entrance channel='user' mod='register'}'" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>