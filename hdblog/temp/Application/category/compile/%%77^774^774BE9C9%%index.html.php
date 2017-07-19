<?php /* Smarty version 2.6.30, created on 2017-06-29 13:12:26
         compiled from index.html */ ?>
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
            <td width="60">栏目ID</td>
            <td>栏目名称</td>
            <td width="200">操作</td>
        </tr>
        <?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=($this->_tpl_vars['category'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['cid']; ?>
</td>
            <td><?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['category_name']; ?>
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
</body>
</html>