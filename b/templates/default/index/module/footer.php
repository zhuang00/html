{*<?php exit();?>*}
<footer>
    <section class="main">
    	<div class="left">
    		<ul>
    		{foreach from=$footer_nav name=footer_nav item=item}
    		<li><a href="{$item.url}">{$item.name}</a></li>
    		{if !$smarty.foreach.footer_nav.last}{/if}
			{/foreach}
    		<div class="clear"></div>
    		</ul>
    		<p>版权所有：这是一个样式文字需要后期修改</p>
    	</div>
    	<div class="right">
    		<img src="{$S_FRONT_URL}images/wechat.png" alt="老刘的二维码">
    		<p>扫描二维码关注最新资讯</p>
    	</div>
    	<div class="clear"></div>    	
    </section>
    </footer>