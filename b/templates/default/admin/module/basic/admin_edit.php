{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>修改密码</span></div>
	<div class="main">
	<form id="form_edit_admin" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_admin" />
			<input name="id" type="hidden" value="{$admin.id}" />
			<table class="table">
				<tr>
					<td>用户名：</td>
					<td><input class="text" name="v_username" type="text" disabled="disabled" value="{$admin.username}" /></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input class="text" name="v_password" type="password" /></td>
				</tr>
				<tr>
					<td>重复密码：</td>
					<td><input class="text" name="r_password" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="check_edit_admin()" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
	</form>
	</div>
</div>
{literal}
<script language="javascript">
	function check_edit_admin()
	{
		var obj = document.getElementById("form_edit_admin");
		var str = "";
		if(obj.v_password.value.length < 5){
			str = "密码长度不能小于5个字符";
		}else if(obj.v_password.value != obj.r_password.value){
			str = "两次输入密码不一致";
		}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
</script>
{/literal}
