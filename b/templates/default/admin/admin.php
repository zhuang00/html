{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>
	<link href="{$S_TPL_PATH}css/admin.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{$S_TPL_PATH}js/admin.js"></script>
</head>
<body>
{if $global.admin_id != 0}
	{include file="module/header.php"}
	<div id="main">
		{include file="module/left.php"}
		{include file="module/right.php"}
		<div class="clear"></div>
	</div>
{else}
	{include file="module/login.php"}
{/if}
</body>
</html>