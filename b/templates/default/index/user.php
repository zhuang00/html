{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$channel_title} - {$site_title}</title>
	<link href="{$S_TPL_PATH}css/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="{$S_TPL_PATH}js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
	{include file="module/header.php"}
	{include file="module/focus.php"}
	<div id="main">
		{if $global.mod == 'register' || $global.mod == 'login'}
			{include file='module/user/'|cat:$global.mod|cat:'.php'}
		{elseif $global.user_id == 0}
			{include file='module/user/login.php'}
		{else}
			<div id="left">
				{include file="module/user/menu.php"}
			</div>
			<div id="right" class="user_center">
				{include file='module/user/'|cat:$global.mod|cat:'.php'}
			</div>
			<div class="clear"></div>
		{/if}
	</div>
	{include file="module/footer.php"}
	{include file="module/service.php"}
</body>
</html>