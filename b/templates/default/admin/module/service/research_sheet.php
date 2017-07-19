{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>问卷调查</span></div>
	<div class="main">
		<form id="form_edit_question" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_question" />
			<table class="table sheet">
				<tr class="h">
					<td>问题</td>
					<td>表单类型</td>
					<td>答案选项</td>
					<td>{$lang.operate}</td>
				</tr>
				{foreach from=$question name=question item=item}
				<tr>
					<td><input name="question[]" type="text" class="text" maxlength="50" value="{$item.question}" /></td>
					<td>
						<select name="input_type[]" >
							<option value="radio" {if $item.type == 'radio'}selected{/if}>单选框</option>
							<option value="checkbox" {if $item.type == 'checkbox'}selected{/if}>复选框</option>
							<option value="text" {if $item.type == 'text'}selected{/if}>文本框</option>
						</select>
					</td>
					<td><input name="answer[]" type="text" class="text" maxlength="150" value="{$item.answer}" /></td>
					<td><input name="id[]" type="hidden" value="{$item.id}" /><span class="red" onClick="del('varia|{$item.id}')">[{$lang.delete}]</span></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='question_add'}')" value="{$lang.add}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>调查结果</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>访客提交问卷</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$research name=research item=item}
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div><b>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}</b>&nbsp;{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}&nbsp;提交问卷：</div>
					<div>{$item.text}</div>
				</td>
				<td>
					<a onClick="del('research|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="2">
					{$prefix = $global.channel|cat:'/mod-research_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、答案选项之间使用|号隔开，个数不限，例如“答案一|答案二|答案三”。
	</div>
</div>
