<?php /* Smarty version 2.6.30, created on 2017-07-01 02:11:13
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 9, false),array('modifier', 'strip_tags', 'index.html', 11, false),array('modifier', 'regex_replace', 'index.html', 11, false),array('modifier', 'mb_substr', 'index.html', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!--日志列表-->
    <div class="big">
        <!--列表-->
        <div class="list">
            <ul>
                <?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=($this->_tpl_vars['data'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
                <li><a href="<?php echo $this->_tpl_vars['__control__']; ?>
&m=blog&id=<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['blog_id']; ?>
" class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['blog_title']; ?>
</a>
                <em><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['n']['index']]['blog_sendtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H-%m') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H-%m')); ?>
</em>
                <p>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['n']['index']]['blog_content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/\s+/", "") : smarty_modifier_regex_replace($_tmp, "/\s+/", "")))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, '0', '60', "utf-8") : mb_substr($_tmp, '0', '60', "utf-8")); ?>

                </p>
                <div class="detail">
                    <a href="#">阅读(<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['blog_click']; ?>
)</a>
                    <a href="#">评论数(123)</a>
                    <a href="#">查看全文</a>
                </div>
                </li>
                <?php endfor; endif; ?>
            </ul>
        </div>
        <!--列表-->
        <div class="about">
            <img width=200px src="./index/tpl/index/images/head.jpg"/>
            <div class="info">
                <span><strong>新浪微薄:</strong>zhuang2011@gmail.com</span>
                <span><strong>QQ号:</strong>1324234234</span>
                <span><strong>博客访问量:</strong><b>122121</b>次</span>

            </div>
    </div>

    </div>
    <!--日志列表-->
</div>
<div class="page">
    <?php echo $this->_tpl_vars['page']; ?>

</div>

</body>
</html>