{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑用户信息 - {$profile.username}</span></div>
	<div class="main">
		<form id="form_edit_user" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_user"/>
			<input name="v_id" type="hidden" value="{$profile.id}"/>
			<table class="table">
				<tr>
					<td width="250px">出生日期：</td>
					<td>
						<select name="birthday_year">
							<option value="0">{$lang.please_select}</option>
							{section name=loop loop=100}
							{$val = 1913 + $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_year}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>&nbsp;&nbsp;
						<select name="birthday_month">
							<option value="0">{$lang.please_select}</option>
							{section name=loop loop=12}
							{$val = $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_month}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>&nbsp;&nbsp;
						<select name="birthday_day">
							<option value="0">{$lang.please_select}</option>
							{section name=loop loop=31}
							{$val = $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_day}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>
					</td>
				</tr>
				<tr>
					<td>性&nbsp;&nbsp;别：</td>
					<td>
						<input name="sex" type="radio" value="0" {if $profile.sex == 0}checked="checked"{/if} />保密&nbsp;&nbsp;
						<input name="sex" type="radio" value="1" {if $profile.sex == 1}checked="checked"{/if} />男&nbsp;&nbsp;
						<input name="sex" type="radio" value="2" {if $profile.sex == 2}checked="checked"{/if} />女
					</td>
				</tr>
				<tr>
					<td>真实姓名：</td>
					<td><input class="text" name="real_name" type="text" value="{$profile.real_name}" /></td>
				</tr>
				<tr>
					<td>Email：</td>
					<td><input class="text" name="email" type="text" value="{$profile.email}" /></td>
				</tr>
				<tr>
					<td>QQ：</td>
					<td><input class="text" name="qq" type="text" value="{$profile.qq}" /></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input class="text" name="tel" type="text" value="{$profile.tel}" /></td>
				</tr>
				<tr>
					<td>手机：</td>
					<td><input class="text" name="phone" type="text" value="{$profile.phone}" /></td>
				</tr>
				<tr>
					<td>地址：</td>
					<td><input class="text" name="address" type="text" value="{$profile.address}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="submit_edit_user()" value="{$lang.edit}" />
							<input class="button" type="button" onclick="go_back()" value="返回" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>修改用户密码 - {$profile.username}</span></div>
	<div class="main">
		<form id="form_edit_pwd" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_pwd"/>
			<input name="v_id" type="hidden" value="{$profile.id}"/>
			<table class="table">
				<tr>
					<td width="250px">新密码：</td>
					<td><input class="text" name="new_pwd" type="password" /></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input class="text" name="r_pwd" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="submit_edit_pwd()" value="{$lang.edit}" />
							<input class="button" type="button" onclick="go_back()" value="返回" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
	function submit_edit_user()
	{
		var str = "";
		var obj = document.getElementById("form_edit_user");
		if(obj.real_name.value == ""){str = "真实姓名不能为空\n";}
		else if(obj.email.value == ""){str = "Email不能为空\n";}
		else if(obj.qq.value == ""){str = "QQ不能为空\n";}
		else if(obj.tel.value == ""){str = "电话不能为空\n";}
		else if(obj.address.value == ""){str = "地址不能为空\n";}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
	function submit_edit_pwd()
	{
		var str = "";
		var obj = document.getElementById("form_edit_pwd");
		var new_pwd = obj.new_pwd.value;
		var r_pwd = obj.r_pwd.value;
		if(new_pwd.length < 6){str = "新密码不能小于6个字符\n";}
		else if(new_pwd.length > 15){str = "新密码不能大于15个字符\n";}
		else if(new_pwd != r_pwd){str = "两次输入密码不一致\n";}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
</script>
{/literal}