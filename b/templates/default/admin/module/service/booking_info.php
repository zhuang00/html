{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>订购详情</span></div>
	<div class="main">
		<form id="form_reply_booking" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="reply_booking" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td width="150px">产品名称：</td>
					<td>{$booking.goods_title}</td>
				</tr>
				<tr>
					<td>订购数量：</td>
					<td>{$booking.number}</td>
				</tr>
				<tr>
					<td>订购描述：</td>
					<td>{$booking.text}</td>
				</tr>
				<tr>
					<td>联系人：</td>
					<td>{$booking.consignee}</td>
				</tr>
				<tr>
					<td>电子邮件地址：</td>
					<td>{$booking.email}</td>
				</tr>
				<tr>
					<td>联系电话：</td>
					<td>{$booking.tel}</td>
				</tr>
				<tr>
					<td>订购时间：</td>
					<td>{$booking.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				</tr>
				<tr>
					<td>处理备注：</td>
					<td><textarea class="textarea" name="v_note" style="width:600px;height:100px;">{$booking.note}</textarea></td>
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