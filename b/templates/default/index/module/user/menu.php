{*<?php exit();?>*}
<div class="block tree" id="user_menu">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.user_center}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="cat1"><a href="{url entrance=$global.entrance channel='user' mod='profile'}">{$lang.user_info}</a></div>
		<div class="cat1"><a href="{url entrance=$global.entrance channel='user' mod='message_sheet'}">{$lang.my_message}</a></div>
		<div class="cat1"><a href="{url entrance=$global.entrance channel='user' mod='comment_sheet'}">{$lang.my_comments}</a></div>
		{if $show_booking}<div class="cat1"><a href="{url entrance=$global.entrance channel='user' mod='booking_sheet'}">{$lang.my_booking}</a></div>{/if}
		<div class="cat1"><a href="{url entrance=$global.entrance channel='user' mod='logout'}">{$lang.log_out}</a></div>
	</div>
</div>