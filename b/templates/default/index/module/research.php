{*<?php exit();?>*}
<div class="block" id="research">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.research}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		{if $research}
		<form id="form_research" method="post" action="{url entrance=$global.entrance channel='deal'}">
			<input name="cmd" type="hidden" value="add_research"/>
			{$sign='{v}'}
			{$k=0}
			{foreach from=$research name=research item=item}
				{$arr=explode($sign,$item.value)}
				<div class="question">{$arr[0]}</div>
				<div>
					{foreach from=$arr name=arr item=item2}
					{if $smarty.foreach.arr.index > 1}
					{if $arr[1] == 'radio'}<span><input name="res_{$k}" type="radio" value="{$item2}" />{$item2}</span>
					{elseif $arr[1] == 'checkbox'}<span><input name="res_{$k}" type="checkbox" value="{$item2}" />{$item2}</span>{$k=$k+1}
					{elseif $arr[1] == 'text'}<span class="text">{$item2}<input name="res_{$k}" type="text" /></span>{$k=$k+1}
					{/if}
					{/if}
					{/foreach}
				</div>
				{if $arr[1] == 'radio'}{$k=$k+1}{/if}
			{/foreach}
			<div class="bt_row"><input class="button" type="submit" value="{$lang.submit}" /></div>
		</form>
		{/if}
	</div>
</div>
<!-- 新秀 -->