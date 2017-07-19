{*<?php exit();?>*}
<div id="left">
	<ul id="menu">
		{foreach from=$nav_left name=nav_left item=item}
		<li><a href="?/{$item.url}">{$item.name}</a></li>
		{/foreach}
	</ul>
</div>