{*<?php exit();?>*}
<div id="service">
	<div id="service_img" onmousemove="show_service(1)"></div>
	<div class="main">
		<div class="in">
			{$service_code}
		</div>
	</div>
</div>
{literal}
<script language="javascript">
	function show_service(val)
	{
		if(val == 1 && document.getElementById("service").style.width == "33px")
		{
			document.getElementById("service").style.width = "143px";
		}else{
			document.getElementById("service").style.width = "33px";
		}
	}
	window.onscroll = function()
	{
		show_service(0);
	}
</script>
{/literal}
<!-- 新秀 -->