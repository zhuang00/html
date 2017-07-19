<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:747595779922b01e3-92421104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4a3500fec1ebbe290b9826a6ef0a53de5f58da' => 
    array (
      0 => 'templates/default/index\\module\\header.php',
      1 => 1498874444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747595779922b01e3-92421104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_595779922cf5e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595779922cf5e')) {function content_595779922cf5e($_smarty_tpl) {?>
</div>
    	<ul class="right">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li class="left"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
        <?php } ?>
    	<div class="clear"></div>
    	</ul>
    	<div class="clear"></div>
    	</nav>
    </header>
<!-- 新秀 -->
<?php }} ?>