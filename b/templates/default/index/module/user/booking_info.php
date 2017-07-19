{*<?php exit();?>*}
<div class="block2" id="user_center">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.order_info}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<table class="sheet">
			<tr>
				<td class="l">{$lang.goods_name}：</td>
				<td>{$booking.goods_title}</td>
			</tr>
			<tr>
				<td class="l">{$lang.quantity}：</td>
				<td>{$booking.number}</td>
			</tr>
			<tr>
				<td class="l">{$lang.order_description}：</td>
				<td>{$booking.text}</td>
			</tr>
			<tr>
				<td class="l">{$lang.consignee}：</td>
				<td>{$booking.consignee}</td>
			</tr>
			<tr>
				<td class="l">{$lang.email}：</td>
				<td>{$booking.email}</td>
			</tr>
			<tr>
				<td class="l">{$lang.contact_tel}：</td>
				<td>{$booking.tel}</td>
			</tr>
			<tr>
				<td class="l">{$lang.order_time}：</td>
				<td>{$booking.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
			</tr>
			<tr>
				<td class="l">{$lang.reply}：</td>
				<td>{$booking.note}</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- 新秀 -->