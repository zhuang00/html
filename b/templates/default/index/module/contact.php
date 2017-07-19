{*<?php exit();?>*}
<div class="block" id="contact">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.contact}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		{foreach from=$contact name=contact item=item}
			<span>{$item.word}：</span>{$item.content}<br />
		{/foreach}
	</div>
</div>
<!-- 新秀 -->