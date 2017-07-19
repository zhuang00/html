{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$channel_title} - {$site_title}</title>
	<link href="{$S_TPL_PATH}css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="{$S_TPL_PATH}js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
    <header>
    <nav class="main">
    	<div class="logo left">
    	<a href="index.html"><img src="{$S_FRONT_URL}images/logo.png" alt="红酒老刘"></a>

	{include file="module/header.php"}
	    <section class="banner2">
        <div class="main"><img src="{$S_FRONT_URL}images/fenye_logo.png" alt="红酒老刘"></div>
    </section>

	{include file="module/lxwm.php"}

	{include file="module/footer.php"}
	</body>
</html>