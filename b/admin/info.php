<?php
include('smarty/Smarty.class.php');
include('admin/common.func.php');
	
set_smarty();
load_lang_pack(S_PROJECT,array($global['channel']));
initial();
if(isset($global['result']))
{
	$result = json_decode(url_decode($global['result'],'no_filter'),true);
	
	$smarty->assign('info_text',$result['info_text']);
	$smarty->assign('link_text',$result['link_text']);
	$smarty->assign('link_href',$result['link_href']);
}else{
	//出错
}
$smarty->display('info.php');
	
//新秀
?>