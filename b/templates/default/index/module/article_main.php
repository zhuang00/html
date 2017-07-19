{*<?php exit();?>*}
{if $show_sheet == 1}
	<div>
        <ul class="news_information_list">
        {foreach from=$article name=article item=item}
            <li>
                <div class="left">
                    <a href="newsXq.html"><img src="images/news_information_01.png" alt="老刘的新闻"></a>
                </div>
                <div class="right time">
                    <h2><a href="{url channel=$global.channel id=$item.id}" >{$item.short_title}</a></h2>
                    <span class="right ">{$item.add_time|date_format:"%Y-%m-%d"}</span>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </li>
            {/foreach}
        </ul>
		{if !$article}<div class="not_found">{$lang.not_found}</div>{/if}
	</div>
	{if $global.cat}{$prefix = $global.channel|cat:'/cat-'|cat:$global.cat}{else}{$prefix = $global.channel}{/if}
	{include file="module/page_link.php" page=$global.page}
{else}
	<div id="article">
		<div class="title">
			<h3>{$article.title}</h3>
		</div>
		<div class="message">
			{$lang.author}：{$article.author}&nbsp;&nbsp;&nbsp;{$lang.add_time}：{$article.add_time|date_format:"%Y-%m-%d %H:%M:%S"}
		</div>
		<div class="main">
			{$article.text}
		</div>
		<div class="share">{$share_code}</div>
		{$prefix = $global.channel}
		{include file="module/prev_next.php" id=$global.id}
	</div>
{/if}
</section>
<!-- 新秀 -->
