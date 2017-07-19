{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>友情链接</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>文字</td>
				<td>网址</td>
				<td>图片</td>
				<td>描述</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="100px">{$lang.operate}</td>
			</tr>
			{foreach from=$link name=link item=item}
			<tr>
				<td>{$item.word}</td>
				<td>{$item.url}</td>
				<td>{if $item.img != 'none'}<img class="lin_img" src="{$item.img}" width="88px" height="31px" />{else}{$item.img}{/if}</td>
				<td>{$item.title}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','link',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','link',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','link',{$item.id},this.checked)" /></td>
				<td>
					<a onClick="jump('{url channel=$global.channel mod='link_edit' id=$item.id}')">[{$lang.edit}]</a>
					<a onClick="del('link|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='link_add'}')" value="{$lang.add}" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>