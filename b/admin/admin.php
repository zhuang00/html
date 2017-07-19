<?php
include('smarty/Smarty.class.php');
include('admin/common.func.php');
	
set_smarty();
load_lang_pack(S_PROJECT,array($global['channel']));
initial('default');
$smarty->display('admin.php');
	
//新秀
?>