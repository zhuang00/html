{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="img_sheet">
		{foreach from=$goods name=goods item=item}
		
		<ul class="trans">
			<li><a href="#"><img src="{$S_FRONT_URL}{$item.x_img}" alt="{$item.title}"><div>{$item.short_title}</div></a></li>
		</ul>
		{/foreach}
		<div class="clear"></div>
	</div>
{/if}
    </section>
<!-- 新秀  {url channel=$global.channel id=$item.id} -->
