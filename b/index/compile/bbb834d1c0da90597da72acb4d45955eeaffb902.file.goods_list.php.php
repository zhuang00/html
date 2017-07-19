<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\module\goods_list.php" */ ?>
<?php /*%%SmartyHeaderCode:21241595779922fe3f0-21877948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb834d1c0da90597da72acb4d45955eeaffb902' => 
    array (
      0 => 'templates/default/index\\module\\goods_list.php',
      1 => 1498901537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21241595779922fe3f0-21877948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_goo_cat' => 0,
    'cat' => 0,
    'goods_list' => 0,
    'S_FRONT_URL' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957799232550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957799232550')) {function content_5957799232550($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_goo_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <section class="index_product main">
    	<h1>PRODUCT CENTER</h1>
    	<h3>产品中心</h3>    	   	
        <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        	<li class="left"><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['x_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" onload="picresize(this,150,150)"></a></li>
        <?php } ?>

            <div class="clear"></div>
        </ul>
    <a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
">READ MORE</a>  
     
    </section>
<?php } ?><?php }} ?>