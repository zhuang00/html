<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:51:02
         compiled from "templates/default/admin\module\basic\static_set.php" */ ?>
<?php /*%%SmartyHeaderCode:1934559562d167dae88-73077708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f08ffba8ace9fa92e5bed0bebbf39b9e77c6a13f' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\static_set.php',
      1 => 1446607570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934559562d167dae88-73077708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_HALF_STATIC' => 0,
    'lang' => 0,
    'S_SHAM_STATIC' => 0,
    'S_PURE_STATIC' => 0,
    'single_page_static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_59562d1688e9b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59562d1688e9b')) {function content_59562d1688e9b($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>静态设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">半静态：</td>
				<td>
					<input type="radio" name="half_static" onClick="set_static('half',1)" <?php if ($_smarty_tpl->tpl_vars['S_HALF_STATIC']->value==1){?>checked<?php }?> />开启
					<input type="radio" name="half_static" onClick="set_static('half',0)" <?php if ($_smarty_tpl->tpl_vars['S_HALF_STATIC']->value==0){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
			</tr>
			<tr>
				<td>伪静态：</td>
				<td>
					<input type="radio" name="sham_static" onClick="set_static('sham',1)" <?php if ($_smarty_tpl->tpl_vars['S_SHAM_STATIC']->value==1){?>checked<?php }?> />开启
					<input type="radio" name="sham_static" onClick="set_static('sham',0)" <?php if ($_smarty_tpl->tpl_vars['S_SHAM_STATIC']->value==0){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
			</tr>
			<tr>
				<td>纯静态：</td>
				<td>
					<input type="radio" name="pure_static" onClick="set_static('pure',1)" <?php if ($_smarty_tpl->tpl_vars['S_PURE_STATIC']->value==1){?>checked<?php }?> />开启
					<input type="radio" name="pure_static" onClick="set_static('pure',0)" <?php if ($_smarty_tpl->tpl_vars['S_PURE_STATIC']->value==0){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
			</tr>
			<tr>
				<td>发表内容时自动生成静态单页：</td>
				<td>
					<input type="radio" name="single_static" onClick="set_varia('single_page_static',1)" <?php if ($_smarty_tpl->tpl_vars['single_page_static']->value==1){?>checked<?php }?> />开启
					<input type="radio" name="single_static" onClick="set_varia('single_page_static',0)" <?php if ($_smarty_tpl->tpl_vars['single_page_static']->value==0){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
			</tr>
			<tr>
				<td>生成静态页面：</td>
				<td>
					<input class="button" type="button" onClick="create_static()" value="开始生成" />
					<div id="static_status" style="display:none">
						<div id="progress_bar"><div id="bar_inside"></div></div>
						&nbsp;&nbsp;<span id="bar_percent">0%</span>
						&nbsp;&nbsp;共有<span id="bar_sum">0</span>个页面需要生成，已生成<span id="bar_created">0</span>个页面
						<div class="clear"></div>
					</div>
				</td>
			</tr> 
			<tr>
				<td>清除静态文件：</td>
				<td>
					<select id="clear_file_type">
						<option value="all">所有页面</option>
						<option value="sheet">列表页</option>
						<option value="about">关于我们</option>
						<option value="goods">产品展示</option>
						<option value="article">资讯中心</option>
						<option value="recruit">人才招聘</option>
						<option value="download">下载中心</option>
						<option value="message">在线留言</option>
					</select>
					<input class="button" type="button" onClick="clear_static()" value="立即清除" />
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、开启半静态模式之后，系统会自动把访问过的页面生成静态文件，后台每次更新之后，必须清除静态文件才能在前台显示更新内容。<br />
		2、开启纯静态模式之后，必须生成页面前台才能正常显示，生成页面之前最好先清除静态文件。<br />
		3、所有静态功能不可以与“多语言版”同时使用。
	</div>
</div>

<script language="javascript">
	function set_static(type,val)
	{
		ajax("post","?/basic/","cmd=set_"+type+"_static&val="+val,
		function(data)
		{
			if(data == 1) result();
		});
	}
	var create_static_interval;
	function create_static()
	{
		ajax("post","?/basic/","cmd=static_check",
		function(data)
		{
			if(data == 1)
			{
				document.getElementById("static_status").style.display = "block";
				create_static_interval = setInterval("create_static_ajax()",1500);			
			}else{
				alert("必须开启半静态才能生成页面，\n若要生成纯静态页面，\n必须同时开启半静态和纯静态");
			}
		});
	}
	function create_static_ajax()
	{
		ajax("post","?/basic/","cmd=create_static",
		function(data)
		{
			var arr = data.split("|");
			var sum = Math.floor(arr[0]);
			var created = Math.floor(arr[1]);
			var bar_width = Math.floor(created / sum * 100);
			
			if(!isNaN(bar_width))
			{
				document.getElementById("bar_sum").innerHTML = sum;
				document.getElementById("bar_percent").innerHTML = bar_width + "%";;
				document.getElementById("bar_inside").style.width = bar_width + "%";;
				document.getElementById("bar_created").innerHTML = created;
				
				if(created == sum)
				{
					document.getElementById("bar_percent").innerHTML = "100%";
					document.getElementById("bar_inside").style.width = "100%";
					clearInterval(create_static_interval);
					create_static_end();
				}
			}
		});	
	}
	function create_static_end()
	{
		ajax("post","?/basic/","cmd=create_static_end",
		function(data)
		{
			if(data == 1) result();
		});
	}
	function clear_static()
	{
		type = document.getElementById("clear_file_type").value;
		if(type != "")
		{
			ajax("post","?/basic/","cmd=clear_static&type=" + type,
			function(data)
			{
				if(data == 1) result();
			});
		}
	}
</script>
<?php }} ?>