{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>焦点图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片地址</td>
				<td>跳转地址</td>
				<td>文字说明</td>
				<td>位置标志</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="100px">{$lang.operate}</td>
			</tr>
			{foreach from=$focus name=focus item=item}
			<tr>
				<td>{$item.path}</td>
				<td>{$item.url}</td>
				<td>{$item.title}</td>
				<td>{$item.site}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','picture',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','picture',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','picture',{$item.id},this.checked)" /></td>
				<td>
					<a onClick="jump('{url channel=$global.channel mod='focus_edit' id=$item.id}')">[{$lang.edit}]</a>
					<a onClick="del('picture|{$item.id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='focus_add'}')" value="{$lang.add}" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、焦点图片可以采用相对路径（相对于网站首页）或以http://开头的网络路径。<br />
		2、可以在“图片管理”中上传图片后，复制其图片地址到此处添加焦点图片。<br />
		3、位置标志指的是页面URL中从问号后面开始的标识字符串，表示该焦点图片所在的页面，default表示全局。
	</div>
</div>