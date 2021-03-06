{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.add_goods}</span></div>
	<div class="main">
		<form id="form_add_goods" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_goods" />
			<table class="table">
				<tr>
					<td width="100px">{$lang.goods_name}：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="" /></td>
				</tr>
				<tr>
					<td>{$lang.goods_sn}：</td>
					<td><input name="v_sn" type="text" class="text" maxlength="200" value="{$goods_sn}" /></td>
				</tr>
				<tr>
					<td>{$lang.goods_cat}：</td>
					<td>
						<select name="v_cat_id">
							<option value="0">{$lang.please_select}</option>
							{foreach from=$cat_list name=cat_list item=item}
							<option value="{$item.cat_id}">{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				{$upl_index = 1}
				<tr>
					<td>{$lang.goods_img}：</td>
					<td>
						<span id="show_pic_{$upl_index}"></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','show_pic_{$upl_index}','img_path_{$upl_index}',1)" value="{$lang.upload_img}" />
						<input name="img_path" id="img_path_{$upl_index}" type="hidden" maxlength="250" value="" />
					</td>
				</tr>
				{$upl_index = 2}
				<tr>
					<td>{$lang.subsidiary_img}：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','','more_img',0)" value="{$lang.upload_img}" />&nbsp;&nbsp;{$lang.upload_multiple}
						<div style="padding:5px 0 0 0;"><input name="more_img" id="more_img" type="text" class="text" value="" /></div>
					</td>
				</tr>
				<tr>
					<td>{$lang.goods_price}：</td>
					<td><input name="v_price" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				{foreach from=$att name=att item=item}
				<tr>
					<td>{$item.att_name}：</td>
					<td><input name="{$item.att_code}" type="text" class="text" value="" /></td>
				</tr>
				{/foreach}
				<tr>
					<td>{$lang.goods_text}：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>{$lang.keywords}：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="{$site_keywords}" />
					</td>
				</tr>
				<tr>
					<td>{$lang.description}：</td>
					<td><input class="text" name="v_description" type="text" value="{$site_description}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		{$lang.help_1}<br />
		{$lang.help_2}
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/goods/box.php'}
<!-------------------------- BOX -------------------------->