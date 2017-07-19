{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.edit_download}</span></div>
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
					<td>{$lang.author}：</td>
					<td><input name="v_author" type="text" class="text" maxlength="" value="{$article.author}" /></td>
				</tr>
				{$upl_index = 1}
				<tr>
					<td>{$lang.upload_file}：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_file','form_upl_file','resource/','show_file_{$upl_index}','file_path_{$upl_index}',0)" value="{$lang.upload_file}" />
						<input class="button" type="button" onClick="before_set_url('web_url','form_web_url','show_file_{$upl_index}','file_path_{$upl_index}')" value="{$lang.web_file}" />
						<input name="file_path" id="file_path_{$upl_index}" type="hidden" maxlength="250" value="{$article.att.file_path.value}" />
						<span id="show_file_{$upl_index}">{$article.att.file_path.value}</span>
					</td>
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
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/download/box.php'}
<!-------------------------- BOX -------------------------->