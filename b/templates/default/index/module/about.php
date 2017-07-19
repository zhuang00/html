{*<?php exit();?>*}
<div class="block2" id="about">
	<div class="head">
		<div class="left"></div>
		<div class="title">{if $about}{$about.title}{else}{$lang.about_us}{/if}</div>
		<a class="more" href="{url channel='about'}">{$lang.more}</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="img"><img src="{$S_TPL_PATH}images/about.jpg" /></div>
		{if $about}
			{$about.text}
			<a class="more" href="{url channel='about'}">【{$lang.detailed}】</a>
		{/if}
	</div>
</div>
<!-- 新秀 -->
