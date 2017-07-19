{*<?php exit();?>*}
<div class="block2" id="best_goo">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.best_goods}</div>
		<a class="more" href="{url channel='goods'}">{$lang.more}</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div id="roll">
			<div id="roll_sheet" onmouseover="over_roll()" onmouseout="out_roll()">
				{foreach from=$best_goods name=best_goods item=item}
				<div class="unit" name="roll_unit">
					<div class="img">
						<table>
							<tr>
								<td>
									<a href="{url channel='goods' id=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.x_img}" alt="{$item.title}" onload="picresize(this,150,150)" /></a>
								</td>
							</tr>
						</table>
					</div>
					<div class="title">
						<a href="{url channel='goods' id=$item.id}" title="{$item.title}" target="_blank">{$item.short_title}</a>
					</div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{$S_TPL_PATH}js/roll.js"></script>
<!-- 新秀 -->
