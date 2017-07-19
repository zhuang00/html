{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.upload_file}</span></div>
	<div class="main">
		<form id="form_upl_file" method="post" enctype="multipart/form-data" action="{url channel='file'}" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="resource/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_file',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>下载资源</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>资源地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$list name=list item=item}
			{$k = $smarty.foreach.list.index}
			<tr>
				<td>{$S_FRONT_URL}{$item.name}</td>
				<td>
					<span id="in_db_{$k}">检测中</span>
				</td>
				<td>
					<span id="del_tag_{$k}"><a onClick="del_file('{$item.name}')">[{$lang.delete}]</a></span>
				</td>
			</tr>
			{/foreach}
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、出于安全考虑，只能上传图片和 rar、zip、pdf 格式文件
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<script language="javascript">
	var list_json = '{$list_json}';
</script>
{literal}
<script language="javascript">
	window.onload = function get_file_id()
	{
		ajax("post","?/file/","cmd=get_file_id&type=file&json=" + list_json,
		function(data)
		{
			if(data != "")
			{
				var arr = data.split("|");
				for(var i = 0; i < arr.length; i ++)
				{
					if(arr[i] != 0)
					{
						document.getElementById("in_db_" + i).innerHTML = "ID:" + arr[i];
						document.getElementById("del_tag_" + i).innerHTML = "无";
					}else{
						document.getElementById("in_db_" + i).innerHTML = '<span class="red">无关</span>';
					}
				}
			}
		});
	}
</script>
{/literal}