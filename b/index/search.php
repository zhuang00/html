<?php
include('smarty/Smarty.class.php');
include('index/common.func.php');
	
set_smarty();
load_lang_pack(S_PROJECT,array($global['channel']));
initial($global['channel']);
if(isset($global['key']))
{
	$smarty->assign('page_title',url_decode($global['key']));
}
$smarty->display('search.php');
	
//新秀
?>