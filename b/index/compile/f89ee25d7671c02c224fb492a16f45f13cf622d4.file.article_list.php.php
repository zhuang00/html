<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\module\article_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2043659577992331084-91800492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89ee25d7671c02c224fb492a16f45f13cf622d4' => 
    array (
      0 => 'templates/default/index\\module\\article_list.php',
      1 => 1498820651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043659577992331084-91800492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_art_cat' => 0,
    'cat' => 0,
    'art_list' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957799235c00',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957799235c00')) {function content_5957799235c00($_smarty_tpl) {?>

    <section class="news main">
    	<h1>NEWS INFORMATION</h1>
    	<h3>新闻资讯</h3>  	
        <ul>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==0){?><div><?php }?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        	<li class="left"><a class="left" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
images/product_05.png" alt="红酒老刘的产品"></a>
        	<div class="left">
        	<h4>饮用不完的酒可以用来做面膜</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</p>
        	</div>
        	<div class="clear"></div>
        	</li>
        	<?php } ?>
        	<div class="clear"></div>
        </ul>
     <?php } ?>
    <a href="<?php echo url(array('channel'=>'article'),$_smarty_tpl);?>
">READ MORE</a>   	
    </section>
    	<?php }} ?>