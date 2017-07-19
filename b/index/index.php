<?php
include('smarty/Smarty.class.php');
include('index/common.func.php');
	
set_smarty();
load_lang_pack(S_PROJECT);
initial($global['channel']);
$smarty->display('index.php');
create_html($global['url']);
	
//新秀
?>