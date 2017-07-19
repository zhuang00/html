{*<?php exit();?>*}
<div class="rec_sheet">
	<ul>
		{foreach from=$recruit name=recruit item=item}
		<li>
			<table>
				<tr>
					<td class="title"><div>{$item.title}</div></td>
					<td class="time">{$item.add_time|date_format:"%Y-%m-%d"}</td>
				</tr>
				<tr>
					<td colspan="2" class="text">{$item.text}</td>
				</tr>
			</table>
		</li>
		{/foreach}
	</ul>
	{if !$recruit}<div class="not_found">{$lang.not_found}</div>{/if}
</div>
{$prefix = $global.channel}
{include file="module/page_link.php" page=$global.page}
<!-- 新秀 -->
