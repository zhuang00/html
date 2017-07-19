<?php /* Smarty version 2.6.30, created on 2017-07-01 01:49:51
         compiled from blog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'blog.html', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main">
    <!--导航-->

    <!--导航-->
   <!--日志列表 -->
    <div class="big">
        <div class="list">
            <ul>
                <li>
                    <h2><?php echo $this->_tpl_vars['field']['blog_title']; ?>
</h2>
                    <div class="detail">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['blog_sendtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%m') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%m')); ?>

                        <a href="#">阅读(<?php echo $this->_tpl_vars['field']['blog_click']; ?>
)</a>
                    </div>
                    <p>
                        <?php echo $this->_tpl_vars['field']['blog_content']; ?>

                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>