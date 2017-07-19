{*<?php exit();?>*}
<div class="box" id="upl_file">
	<div class="head">
		<div class="title">{$lang.upload_file}</div>
		<div class="close" onClick="hide_box('upl_file')">{$lang.close}</div>
	</div>
	<form id="form_upl_file" method="post" enctype="multipart/form-data" action="{url channel='article'}" target="deal">
		<input name="cmd" type="hidden" value="upload" />
		<input name="dir" type="hidden" value="" />
		<input name="file" type="hidden" value="" />
		<input name="reduce" type="hidden" value="" />
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table>
			<tr>
				<td><input name="file_path" type="file" onChange="do_upload('form_upl_file',1)" /></td>
			</tr>
		</table>
	</form>
</div>
<div class="box" id="web_url">
	<div class="head">
		<div class="title">{$lang.web_file}</div>
		<div class="close" onclick="hide_box('web_url')">{$lang.close}</div>
	</div>
	<form id="form_web_url" method="post" target="deal">
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table>
			<tr>
				<td>
					<input name="file_path" type="text" value="http://" />
					<input class="button" type="button" onclick="set_web_url('form_web_url')" value="{$lang.ok}" />
				</td>
			</tr>
		</table>
	</form>
</div>