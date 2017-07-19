<?php /* Smarty version Smarty-3.1.3, created on 2017-06-30 18:09:38
         compiled from "templates/default/admin\module\editor.php" */ ?>
<?php /*%%SmartyHeaderCode:121785956236282f994-65561625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac9e31022d49e090aaba435153b31dd55ffe448' => 
    array (
      0 => 'templates/default/admin\\module\\editor.php',
      1 => 1446688998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121785956236282f994-65561625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editor_text' => 0,
    'show_sinsiu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5956236283f39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5956236283f39')) {function content_5956236283f39($_smarty_tpl) {?>
<script type="text/javascript" src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<textarea rows="30" cols="50" name="editor"><?php echo $_smarty_tpl->tpl_vars['editor_text']->value;?>
</textarea>
<script type="text/javascript">
	CKEDITOR.replace('editor',{});
</script>
<?php if ($_smarty_tpl->tpl_vars['show_sinsiu']->value){?>
<div style="padding:10px 0 5px 0;">
	温馨提示：您使用的编辑器还没有上传功能，您可以<a href="http://www.sinsiu.com/resource/sinsiu_ckfinder_v2.zip" target="_blank">点击这里下载</a>上传模块，并按里面的说明使用
</div>
<?php }?>
<!-- 新秀 --><?php }} ?>