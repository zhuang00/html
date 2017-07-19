{*<?php exit();?>*}
<div class="block tree">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.article_tree}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		{foreach from=$art_tree name=art_tree item=item}
		{if $item.grade == 1}{$grade = 1}{elseif $item.grade == 2}{$grade = 2}{else}{$grade = 3}{/if}
		<div class="cat{$grade}"><a href="{url channel=$item.channel cat=$item.id}">{$item.name}</a></div>
		{/foreach}
	</div>
</div>
<!-- 新秀 -->
