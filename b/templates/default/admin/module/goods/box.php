{*<?php exit();?>*}
<div class="box" id="upl_img">
	<div class="head">
		<div class="title">{$lang.upload_img}</div>
		<div class="close" onClick="hide_box('upl_img')">{$lang.close}</div>
	</div>
	<form id="form_upl_img" method="post" enctype="multipart/form-data" action="{url channel=$global.channel}" target="deal">
		<input name="cmd" type="hidden" value="upload" />
		<input name="dir" type="hidden" value="" />
		<input name="file" type="hidden" value="" />
		<input name="reduce" type="hidden" value="" />
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table>
			<tr>
				<td><input name="file_path" type="file" onChange="do_upload('form_upl_img',1)" /></td>
			</tr>
		</table>
	</form>
</div>