{*<?php exit();?>*}
<div class="block2" id="user_center">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.order_goods}</div>
		<div class="right"></div>
	</div>
	<div class="main add_booking">
	<form id="form_add_booking" method="post" action="{url entrance=$global.entrance channel='user'}">
		<input name="cmd" type="hidden" value="add_booking"/>
		<input name="goods_id" type="hidden" value="{$global.goods_id}"/>
		<table class="sheet">
			<tr>
				<td class="l">{$lang.goods_name}：</td>
				<td>{$goods_title}</td>
			</tr>
			<tr>
				<td class="l">{$lang.quantity}：</td>
				<td><input class="text" name="number" type="text" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.order_description}：</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td class="l">{$lang.consignee}：</td>
				<td><input class="text" name="consignee" type="text" value="{$booking.consignee}" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.email}：</td>
				<td><input class="text" name="email" type="text" value="{$booking.email}" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.contact_tel}：</td>
				<td><input class="text" name="tel" type="text" value="{$booking.tel}" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="submit_add_booking()" value="{$lang.submit}" />
					</div>
				</td>
			</tr>
		</table>
	</form>
	</div>
</div>
<script language="javascript">
	var lang_enter_quantity = "{$lang.enter_quantity}";
	var lang_enter_order_text = "{$lang.enter_order_text}";
	var lang_enter_consignee = "{$lang.enter_consignee}";
	var lang_enter_email = "{$lang.enter_email}";
	var lang_enter_contact_tel = "{$lang.enter_contact_tel}";
</script>
{literal}
<script language="javascript">
function submit_add_booking()
{
	var str = "";
	var obj = document.getElementById("form_add_booking");
	if(obj.number.value == ""){str += "-" + lang_enter_quantity + "\n";}
	if(obj.text.value == ""){str += "-" + lang_enter_order_text + "\n";}
	if(obj.consignee.value == ""){str += "-" + lang_enter_consignee + "\n";}
	if(obj.email.value == ""){str += "-" + lang_enter_email + "\n";}
	if(obj.tel.value == ""){str += "-" + lang_enter_contact_tel + "\n";}
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