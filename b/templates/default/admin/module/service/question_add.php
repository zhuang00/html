{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加问题</span></div>
	<div class="main">
		<form id="form_add_question" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_question" />
			<table class="table">
				<tr>
					<td>问题：</td>
					<td><input name="question" type="text" class="text" maxlength="50" /></td>
				</tr>
				<tr>
					<td>表单类型：</td>
					<td>
						<select name="input_type" >
							<option value="radio">单选框</option>
							<option value="checkbox">复选框</option>
							<option value="text">文本框</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>答案选项：</td>
					<td><input name="answer" type="text" class="text" maxlength="150" /></td>
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