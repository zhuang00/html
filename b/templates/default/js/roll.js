var roll_width = 750;
var roll_height = 180;
var unit_width = 150;
var unit_height = 180;
var unit_margin = 7;
var roll_px = 1;
var roll_interval = 30;
var roll_i = 1;
var roll_j = 1;
var sheet_width = 0;
document.getElementById("roll").style.width = roll_width + "px";
document.getElementById("roll").style.height = roll_height + "px";
code = document.getElementById("roll_sheet").innerHTML;
for(i = 0;i < 3;i ++)
{
	code += code;
}
document.getElementById("roll_sheet").innerHTML = code;
var webkit = true;
if(navigator.appName == "Microsoft Internet Explorer")
{
	var version = navigator.appVersion.split(";"); 
	var b_version = version[1].replace(/[ ]/g,""); 
	if(b_version == "MSIE6.0" || b_version == "MSIE7.0" || b_version == "MSIE8.0" || b_version == "MSIE9.0")
	{
		webkit = false;
		var child_nodes = document.getElementById("roll_sheet").childNodes;
		var obj_count = child_nodes.length;
		var unit_count = 0;
		var item_obj;
		for(i = 0;i < obj_count;i ++)
		{
			item_obj = child_nodes.item(i);
			if(new String(item_obj) != "[object Text]")
			{
				unit_count ++;
			}
		}
		for(i = 0;i < obj_count;i ++)
		{
			item_obj = child_nodes.item(i);
			if(new String(item_obj) != "[object Text]")
			{
				obj = item_obj.style;
				obj.width = unit_width + "px";
				obj.height = unit_height + "px";
				obj.marginLeft = unit_margin + "px";
				obj.marginRight = unit_margin + "px";
			}
		}
		sheet_width = (unit_width + unit_margin * 2) * unit_count + unit_margin;
		document.getElementById("roll_sheet").style.width = sheet_width + "px";
	}
}
if(webkit)
{
	unit_count = document.getElementsByName("roll_unit").length;
	for(i = 0;i < unit_count;i ++)
	{
		obj = document.getElementsByName("roll_unit").item(i).style;
		obj.width = unit_width + "px";
		obj.height = unit_height + "px";
		obj.marginLeft = unit_margin + "px";
		obj.marginRight = unit_margin + "px";
	}
	sheet_width = (unit_width + unit_margin * 2) * unit_count + unit_margin;
	document.getElementById("roll_sheet").style.width = sheet_width + "px";
}
function roll()
{
	if(roll_i < sheet_width - roll_width)
	{
		document.getElementById("roll_sheet").style.left = -roll_i + "px";
		roll_j = (roll_i = roll_i + roll_px);
	}else{
		document.getElementById("roll_sheet").style.left = -roll_j + "px";
		roll_j = roll_j - roll_px;
		if(roll_j < 0) roll_i = roll_j;
	}
}
var setroll = setInterval("roll()",roll_interval);
function over_roll()
{
	clearInterval(setroll);
}
function out_roll()
{
	setroll = setInterval("roll()",roll_interval);
}
//新秀