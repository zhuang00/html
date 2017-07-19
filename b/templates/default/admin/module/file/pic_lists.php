{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.upload_img}</span></div>
	<div class="main">
		<form id="form_upl_img" method="post" enctype="multipart/form-data" action="{url channel='goods'}" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="images/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_img',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>公共图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="150px">图片预览</td>
				<td>图片地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$list_public name=list_public item=item}
			{$k = $smarty.foreach.list_public.index}
			<tr>
				<td><img src="{$item.name}" height="30px" /></td>
				<td>{$S_FRONT_URL}{$item.name}</td>
				<td>
					<span id="in_db_{$k}">检测中</span>
				</td>
				<td>
					<a href="{$item.name}">[{$lang.view}]</a>
					<a id="del_tag_{$k}" onClick="del_file('{$item.name}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
		</table>
	</div>
</div>
<div class="space"></div>
{foreach from=$lists name=lists item=type}
<div class="block">
	<div class="head"><span>频道图片 - {$type.name}</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$type.folder name=list item=item}
			<tr>
				<td>images/{$type.channel}/{$item.name}</td>
				<td>
					<a href="{url channel='file' mod='pic_list' path=$item.path_str}">[进入查看]</a>
				</td>
			</tr>
			{/foreach}
		</table>
	</div>
</div>
<div class="space"></div>
{/foreach}
<div class="block">
	<div class="head"><span>编辑器图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$list_editor name=list_editor item=item}
			<tr>
				<td>images/editor/{$item.name}</td>
				<td>
					<a href="{url channel='file' mod='pic_list' path=$item.path_str}">[进入查看]</a>
				</td>
			</tr>
			{/foreach}
		</table>
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
		ajax("post","?/file/","cmd=get_file_id&type=img&json=" + list_json,
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
						document.getElementById("del_tag_" + i).style.display = "none";
					}else{
						document.getElementById("in_db_" + i).innerHTML = '<span class="red">无关</span>';
					}
				}
			}
		});
	}
</script>
{/literal}