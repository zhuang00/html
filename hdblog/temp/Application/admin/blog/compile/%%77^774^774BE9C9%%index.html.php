<?php /* Smarty version 2.6.30, created on 2017-07-01 03:20:25
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 22, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<table border='1' width='100%'>
    <tr>
        <td width="60">id</td>
        <td>标题</td>
        <td>发表时间</td>
        <td>点击数</td>
        <td>所属分类</td>
        <td width="200">操作</td>
    </tr>
    <?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=($this->_tpl_vars['field'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <tr>
        <td><?php echo $this->_tpl_vars['field'][$this->_sections['n']['index']]['blog_id']; ?>
</td>
        <td><?php echo $this->_tpl_vars['field'][$this->_sections['n']['index']]['blog_title']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['field'][$this->_sections['n']['index']]['blog_sendtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
        <td><?php echo $this->_tpl_vars['field'][$this->_sections['n']['index']]['blog_click']; ?>
</td>
        <td><?php echo $this->_tpl_vars['field'][$this->_sections['n']['index']]['category_name']; ?>
</td>
        <td>
            <a href="<?php echo $this->_tpl_vars['__control__']; ?>
&m=editshow&cid=<?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['cid']; ?>
">编辑</a>|
            <a href="<?php echo $this->_tpl_vars['__control__']; ?>
&m=del&cid=<?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['cid']; ?>
">删除</a>
        </td>
    </tr>
    <?php endfor; endif; ?>
</table>
<div class="page">
    <?php echo $this->_tpl_vars['page']; ?>

</div>
</body>
</html>