{*<?php exit();?>*}
<div class="here">
	<div class="left"></div>
	<div class="title">{$channel_title}</div>
	<div class="link">
		<a class="home" href="./">{$lang.home}</a>
		{if $channel_title}<a href="{url prefix=$S_FRONT_URL|cat:$global.entrance|cat:'?/search' key=$global.key}">{$channel_title}</a>{/if}
		{if $page_title}<a href="{url prefix=$S_FRONT_URL|cat:$global.entrance|cat:'?/search' key=$global.key}">{$page_title|truncate:20}</a>{/if}
		<div class="clear"></div>
	</div>
	<div class="right"></div>
</div>
<div class="img_sheet">
	{foreach from=$search name=search item=item}
	<div class="unit">
		<div class="in">
		<table>
			<tr>
				<td class="img">
					<a href="{url channel='goods' id=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.x_img}" onload="picresize(this,150,150)" /></a>
				</td>
			</tr>
			<tr>
				<td class="title">
					<a href="{url channel='goods' id=$item.id}" target="_blank">{$item.short_title}</a>
				</td>
			</tr>
		</table>
		</div>
	</div>
	{/foreach}
	{if !$search}<div class="not_found">{$lang.not_found}</div>{/if}
	<div class="clear"></div>
</div>
{$prefix = $S_FRONT_URL|cat:$global.entrance|cat:'?/search/key-'|cat:$global.key}
{include file="module/page_link.php" page=$global.page}
<!-- 新秀 -->
