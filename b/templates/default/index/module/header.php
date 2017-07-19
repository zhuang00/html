{*<?php exit();?>*}
</div>
    	<ul class="right">
        {foreach from=$nav name=nav item=item}
        <li class="left"><a href="{$item.url}" {if $item.target == 1}target="_blank"{/if}>{$item.name}</a></li>
        {/foreach}
    	<div class="clear"></div>
    	</ul>
    	<div class="clear"></div>
    	</nav>
    </header>
<!-- 新秀 -->
