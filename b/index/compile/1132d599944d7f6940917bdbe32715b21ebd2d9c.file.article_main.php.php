<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:58:35
         compiled from "templates/default/index\module\article_main.php" */ ?>
<?php /*%%SmartyHeaderCode:152825957805b72d720-20230176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1132d599944d7f6940917bdbe32715b21ebd2d9c' => 
    array (
      0 => 'templates/default/index\\module\\article_main.php',
      1 => 1498891423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152825957805b72d720-20230176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sheet' => 0,
    'article' => 0,
    'global' => 0,
    'item' => 0,
    'lang' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5957805b78b33',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957805b78b33')) {function content_5957805b78b33($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\b\smarty\plugins\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
	<div>
        <ul class="news_information_list">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>
                <div class="left">
                    <a href="newsXq.html"><img src="images/news_information_01.png" alt="老刘的新闻"></a>
                </div>
                <div class="right time">
                    <h2><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></h2>
                    <span class="right "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d");?>
</span>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </li>
            <?php } ?>
        </ul>
		<?php if (!$_smarty_tpl->tpl_vars['article']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['global']->value['cat']){?><?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable((($_smarty_tpl->tpl_vars['global']->value['channel']).('/cat-')).($_smarty_tpl->tpl_vars['global']->value['cat']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable($_smarty_tpl->tpl_vars['global']->value['channel'], null, 0);?><?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

<?php }else{ ?>
	<div id="article">
		<div class="title">
			<h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
		</div>
		<div class="message">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
：<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_time'];?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>

		</div>
		<div class="main">
			<?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>

		</div>
		<div class="share"><?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>
</div>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable($_smarty_tpl->tpl_vars['global']->value['channel'], null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['global']->value['id']), 0);?>

	</div>
<?php }?>
</section>
<!-- 新秀 -->
<?php }} ?>