{*<?php exit();?>*}
<div id="right">
{if $admin_power}
	<div id="core">
		{include file='module/'|cat:$global.original|cat:'/'|cat:$global.mod|cat:'.php'}
	</div>
{else}
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
			</div>
		</div>
	</div>
{/if}
</div>