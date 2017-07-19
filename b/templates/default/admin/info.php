{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>
	<link href="{$S_TPL_PATH}css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="info">
		<div class="main">
			<div class="txt">{$info_text}</div>
			<div class="link"><a href="{$link_href}">{$link_text}</a></div>
		</div>
		<script language="javascript">
			var link_href = "{$link_href}";
			var basic_url = "{url channel='basic'}";
			var jump_time = 3000;
			if(link_href == basic_url) jump_time = 10000;
			interval = setInterval("document.location.href = '" + link_href + "'",jump_time);
		</script>
	</div>
</body>
</html>
