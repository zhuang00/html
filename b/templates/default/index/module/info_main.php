{*<?php exit();?>*}
<div class="block2" id="info">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.system_info}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<div>{$info_text}</div>
		<a href="{$link_href}">{$link_text}</a>
	</div>
</div>
<script language="javascript">
	interval = setInterval("document.location.href = '{$link_href}'",3000);
</script>