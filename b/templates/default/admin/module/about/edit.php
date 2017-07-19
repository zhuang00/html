{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.edit_about}</span></div>
	<div class="main">
		<form id="form_edit_art" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td width="100px">{$lang.article_title}：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="{$article.title}" /></td>
				</tr>
				<tr>
					<td>{$lang.article_text}：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>{$lang.keywords}：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="{$article.keywords}" />
					</td>
				</tr>
				<tr>
					<td>{$lang.description}：</td>
					<td><input class="text" name="v_description" type="text" value="{$article.description}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
