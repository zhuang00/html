<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\module\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:1501059577992367b98-34903867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7760452d075538029f9ecb7e4dda4e1b48641984' => 
    array (
      0 => 'templates/default/index\\module\\footer.php',
      1 => 1498818824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1501059577992367b98-34903867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_nav' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957799237f29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957799237f29')) {function content_5957799237f29($_smarty_tpl) {?>
<footer>
    <section class="main">
    	<div class="left">
    		<ul>
    		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footer_nav']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
    		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footer_nav']['last']){?><?php }?>
			<?php } ?>
    		<div class="clear"></div>
    		</ul>
    		<p>版权所有：这是一个样式文字需要后期修改</p>
    	</div>
    	<div class="right">
    		<img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
images/wechat.png" alt="老刘的二维码">
    		<p>扫描二维码关注最新资讯</p>
    	</div>
    	<div class="clear"></div>    	
    </section>
    </footer><?php }} ?>