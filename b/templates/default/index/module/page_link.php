{*<?php exit();?>*}
<div class="page_link" style="text-align:center;margin:10px 0;font-size:20px;">
	<div class="in">
		<span>{$lang.all}{$page_sum}{$lang.pages}</span>
		<span>{$lang.no}{$page}{$lang.page}</span>
		{if $page_sum != 1}
		<a href="{url prefix=$prefix page=1}">{$lang.first_page}</a>
		{if $page-1 > 0}<a href="{url prefix=$prefix page=$page-1}">{$lang.previous_page}</a>{/if}
		{if $page-4 > 0}<a class="num" href="{url prefix=$prefix page=$page-4}">【{$page-4}】</a>{/if}
		{if $page-3 > 0}<a class="num" href="{url prefix=$prefix page=$page-3}">【{$page-3}】</a>{/if}
		{if $page-2 > 0}<a class="num" href="{url prefix=$prefix page=$page-2}">【{$page-2}】</a>{/if}
		{if $page-1 > 0}<a class="num" href="{url prefix=$prefix page=$page-1}">【{$page-1}】</a>{/if}
		<a class="num" href="{url prefix=$prefix page=$page}" style="color:#007bc8;">【{$page}】</a>
		{if $page+1 <= $page_sum}<a class="num" href="{url prefix=$prefix page=$page+1}">【{$page+1}】</a>{/if}
		{if $page+2 <= $page_sum}<a class="num" href="{url prefix=$prefix page=$page+2}">【{$page+2}】</a>{/if}
		{if $page+3 <= $page_sum}<a class="num" href="{url prefix=$prefix page=$page+3}">【{$page+3}】</a>{/if}
		{if $page+4 <= $page_sum}<a class="num" href="{url prefix=$prefix page=$page+4}">【{$page+4}】</a>{/if}
		{if $page+1 <= $page_sum}<a href="{url prefix=$prefix page=$page+1}">{$lang.next_page}</a>{/if}
		<a href="{url prefix=$prefix page=$page_sum}">{$lang.last_page}</a>
		{/if}

	</div>
</div>
{literal}
<script language="javascript">
	function page_jump(val)
	{
		var obj = document.getElementById("form_jump");
		var url = obj.url.value;
		var page = obj.page.value;
		url = url.replace("/page-" + val + "/","/page-" + page + "/");
		document.location.href = url;
	}
</script>
{/literal}
<!-- 新秀 -->