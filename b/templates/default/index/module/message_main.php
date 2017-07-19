{*<?php exit();?>*}
<div class="mes_sheet">
	<ul>
		{foreach from=$message name=message item=item}
		<li>
			<table>
				<tr>
					<td height="30px"><b>{if $item.user_name}{$item.user_name}{else}{$lang.anonymous_user}{/if}：</b><span>{$item.title}</span>&nbsp;&nbsp;[ {$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"} ]</td>
				</tr>
				<tr>
					<td><div>{$item.text}</div></td>
				</tr>
				{if $item.reply}
				<tr>
					<td><div class="reply"><span>{$lang.reply}：</span>{$item.reply}</div></td>
				</tr>
				{/if}
			</table>
		</li>
		{/foreach}
	</ul>
	{if !$message}<div class="not_found">{$lang.not_found}</div>{/if}
</div>
{$prefix = $global.channel}
{include file="module/page_link.php" page=$global.page}
<div id="leave_word">
	<form id="form_add_message" method="post" action="{url entrance=$global.entrance channel='deal'}">
		<input name="cmd" type="hidden" value="add_message"/>
		<table>
			<tr>
				<td class="l">{$lang.user_name}：</td>
				<td>{if $user_name}{$user_name}{else}{$lang.anonymous_user}{/if}&nbsp;&nbsp;</td>
			</tr>
			<tr>
				<td class="l">E-mail：</td>
				<td><input name="email" class="text" type="text" value="{$user_email}" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.message_type}：</td>
				<td>
					<input name="type" type="radio" value="{$lang.leave_word}" checked="checked" />{$lang.leave_word}&nbsp;&nbsp;
					<input name="type" type="radio" value="{$lang.complaints}" />{$lang.complaints}&nbsp;&nbsp;
					<input name="type" type="radio" value="{$lang.ask}" />{$lang.ask}&nbsp;&nbsp;
					<input name="type" type="radio" value="{$lang.aftermarket}" />{$lang.aftermarket}&nbsp;&nbsp;
					<input name="type" type="radio" value="{$lang.buy}" />{$lang.buy}&nbsp;&nbsp;
				</td>
			</tr>
			<tr>
				<td class="l">{$lang.theme}：</td>
				<td>
					<input name="title" class="text" type="text" maxlength="80"/>&nbsp;&nbsp;
					<input name="show" type="checkbox" value="2"/>&nbsp;{$lang.secret}
				</td>
			</tr>
			<tr>
				<td class="l">{$lang.mes_content}：</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="submit_add_message()" value="{$lang.submit}" />&nbsp;&nbsp;
						<input class="button" type="reset" value="{$lang.reset}"/>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="space"></div>
<script language="javascript">
	var lang_email_empty = "{$lang.email_empty}";
	var lang_mes_title_empty = "{$lang.mes_title_empty}";
	var lang_mes_text_empty = "{$lang.mes_text_empty}";
</script>
{literal}
<script language="javascript">
function submit_add_message()
{
	var str = "";
	var obj = document.getElementById("form_add_message");
	if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
	if(obj.title.value == ""){str += "-" + lang_mes_title_empty + "\n";}
	if(obj.text.value == ""){str += "-" + lang_mes_text_empty + "\n";}
	if(str != "")
	{
		alert(str);
	}else{
		obj.submit();
	}
}
</script>
{/literal}
<!-- 新秀 -->