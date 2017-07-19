{*<?php exit();?>*}
<div class="block" id="link">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.link}</div>
		<div class="right"></div>
	</div>
	<div class="main">
	{if $img_link}
		<div class="img">
		{foreach from=$img_link name=img_link item=item}
		<a href="{$item.url}" title="{$item.title}" target="_blank"><img src="{$item.img}" /></a>
		{/foreach}
		<div class="clear"></div>
		</div>
	{/if}
	{if $word_link}
		<div class="word">
		{foreach from=$word_link name=word_link item=item}
		<a href="{$item.url}" title="{$item.title}" target="_blank">{$item.word}</a>
		{/foreach}
		</div>
	{/if}
	</div>
</div>
<!-- 新秀 -->
