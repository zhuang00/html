<?php /* Smarty version 2.6.30, created on 2017-06-07 09:21:54
         compiled from 4.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', '4.html', 18, false),)), $this); ?>
<?php $this->_cache_serials['compile/%%69^69E^69E55284%%4.html.inc'] = '26ced30ef19bdcd9501c76377b8a5ba2'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <style type="text/css">
        <?php echo ' tr.red td{color:#f00;}
        tr.hot td{font-size:20px;font-weight:bold;}
        tr.bgred td{background:#f00;color:yellow;}
        li.bgGreen{background:green;color:black;}
        div.page a{background:#333;color:#fff;padding:2px 5px;margin-right: 5px;}
        div.page strong{background: #f00;color:yellow;padding:2px 5px;}
        '; ?>

        </style>
</head>
<body>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:26ced30ef19bdcd9501c76377b8a5ba2#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;nocache_func($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <h3>欢迎<?php echo $_SESSION['user']; ?>
访问网站</h3>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo nocache_func($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:26ced30ef19bdcd9501c76377b8a5ba2#0}'; endif;?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<hr/>
<table border="1" width="600">
    <tr>
        <td>学生</td>
        <td>性别</td>
        <td>出生日期</td>
    </tr>
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
    <tr class="hot">
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sname']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sex']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['birthday']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
</table>
<div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>

</body>
</html>