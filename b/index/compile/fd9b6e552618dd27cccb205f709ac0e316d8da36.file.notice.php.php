<?php /* Smarty version Smarty-3.1.3, created on 2017-07-01 18:29:38
         compiled from "templates/default/index\module\notice.php" */ ?>
<?php /*%%SmartyHeaderCode:31829595779922db160-68886532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9b6e552618dd27cccb205f709ac0e316d8da36' => 
    array (
      0 => 'templates/default/index\\module\\notice.php',
      1 => 1498876054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31829595779922db160-68886532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_595779922f287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595779922f287')) {function content_595779922f287($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\phpStudy\WWW\b\smarty\plugins\modifier.truncate.php';
?>
    <section class="index_about main">
     <div class="left">
    	<h1>ABOUT OLD LIU</h1>
    	<h3>关于老LIU</h3>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['about']->value['text'],"150","...");?>
</p>
    	<a href="<?php echo url(array('channel'=>'about'),$_smarty_tpl);?>
">READ MORE</a>     	
     </div>
     <div class="right">
     <a href="about.html"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/images/origin.png" alt="关于老刘"></a>     	
     </div>
     <div class="clear"></div>
    </section>
<!-- 新秀 -->
<?php }} ?>