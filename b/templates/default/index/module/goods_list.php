{*<?php exit();?>*}

{foreach from=$best_goo_cat name=best_goo_cat item=cat}
        <section class="index_product main">
    	<h1>PRODUCT CENTER</h1>
    	<h3>产品中心</h3>    	   	
        <ul>
        {foreach from=$goods_list[$cat.cat_id] name=goods_list item=item}
        	<li class="left"><a href="{url channel=$cat.channel cat=$cat.cat_id}"><img src="{$S_FRONT_URL}{$item.x_img}" alt="{$item.title}" onload="picresize(this,150,150)"></a></li>
        {/foreach}

            <div class="clear"></div>
        </ul>
    <a href="{url channel=$cat.channel cat=$cat.cat_id}">READ MORE</a>  
     
    </section>
{/foreach}