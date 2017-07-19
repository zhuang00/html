<?php /* Smarty version 2.6.30, created on 2017-06-07 09:21:54
         compiled from 4.html */

$this->_cache_serials['compile/%%69^69E^69E55284%%4.html.inc'] = '26ced30ef19bdcd9501c76377b8a5ba2';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', '4.html', 18, false),)), $this); ?>
<?php
function _smarty_tplfunc_26ced30ef19bdcd9501c76377b8a5ba2_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;nocache_func($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <h3>欢迎<?php echo $_SESSION['user']; ?>
访问网站</h3>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo nocache_func($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
