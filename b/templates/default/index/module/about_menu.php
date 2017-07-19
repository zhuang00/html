{*<?php exit();?>*}


<div class="block tree">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.about_menu}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		{foreach from=$menu name=menu item=item}
		<div class="cat1"><a href="{$item.url}">{$item.name}</a></div>
		{/foreach}
	</div>
</div>
<!-- 新秀 -->
