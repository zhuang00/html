{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.article_sheet}</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="120px">{$lang.category}</td>
				<td>{$lang.title}</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="150px">{$lang.operate}</td>
			</tr>
			{foreach from=$article name=article item=item}
			<tr>
				<td>{if $item.cat_name}{$item.cat_name}{else}{$lang.none}{/if}</td>
				<td>{$item.title}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','article',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','article',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','article',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url entrance=$index_entrance channel=$global.channel id=$item.id}" target="_blank">[{$lang.view}]</a>&nbsp;
					<a href="{url channel=$global.channel mod='edit' id=$item.id}">[{$lang.edit}]</a>&nbsp;
					<a onClick="del('article|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.article_search}</span></div>
	<div class="main">
		<form id="form_search" method="post" action="{url channel=$global.channel mod='sheet'}">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="title">{$lang.article_title}</option>
							<option value="author">{$lang.article_author}</option>
							<option value="text">{$lang.article_text}</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="{$lang.article_search}" onclick="do_search()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		site = obj.action.lastIndexOf("/");
		str = obj.action.substr(site,obj.action.length - site);
		obj.action = obj.action.substr(0,site) + '/field-' + obj.field.value + '/key-' + obj.key.value + str;
		obj.submit();
	}
</script>
{/literal}