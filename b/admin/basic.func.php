<?php
function main()
{
	global $global,$smarty;
	set_global();
	set_more_global();
	
	controller();
}
function set_more_global()
{
	global $global;
	$global['admin_id'] = 0;
	$global['channel'] = get_global('channel','basic');
	$global['original'] = get_global('original','basic');
	$global['mod'] = get_global('mod','basic_info');
	$global['cat'] = get_global('cat',0);
	$global['page'] = get_global('page',1);
	$global['id'] = get_global('id',0);
	$global['original'] = $global['channel'];
}
//新秀
?>