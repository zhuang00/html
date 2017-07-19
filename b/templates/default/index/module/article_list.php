{*<?php exit();?>*}

    <section class="news main">
    	<h1>NEWS INFORMATION</h1>
    	<h3>新闻资讯</h3>  	
        <ul>
        {foreach from=$best_art_cat name=best_art_cat item=cat}
        {if $smarty.foreach.best_art_cat.index % 2 == 0}<div>{/if}
        {foreach from=$art_list[$cat.cat_id] name=art_list item=item }
        	<li class="left"><a class="left" href="{url channel=$cat.channel id=$item.id}"><img src="{$S_FRONT_URL}images/product_05.png" alt="红酒老刘的产品"></a>
        	<div class="left">
        	<h4>饮用不完的酒可以用来做面膜</h4>
            <p>{$item.short_title}</p>
        	</div>
        	<div class="clear"></div>
        	</li>
        	{/foreach}
        	<div class="clear"></div>
        </ul>
     {/foreach}
    <a href="{url channel='article'}">READ MORE</a>   	
    </section>
    	