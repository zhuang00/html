{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.download_sheet}</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>{$lang.title}</td>
				<td width="150px">{$lang.download_link}</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="150px">{$lang.operate}</td>
			</tr>
			{foreach from=$article name=article item=item}
			<tr>
				<td>{$item.title}</td>
				<td><a href="{$item.att.file_path.value}">[{$lang.click_download}]</a></td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','article',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','article',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','article',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url channel=$global.channel mod='edit' id=$item.id}">[{$lang.edit}]</a>&nbsp;
					<a onClick="del('article|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{$prefix = $global.channel|cat:'/mod-sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
