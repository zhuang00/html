<?php /* Smarty version 2.6.30, created on 2017-06-06 23:54:15
         compiled from list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
        '; ?>

    </style>
</head>
<body>
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
    <?php if ($this->_sections['n']['first']): ?>
    <tr class="hot">
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sname']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sex']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['birthday']; ?>
</td>
    </tr>
    <?php elseif ($this->_sections['n']['index'] <= 2): ?>
    <tr class="red">
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sname']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sex']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['birthday']; ?>
</td>
    </tr>
    <?php elseif ($this->_sections['n']['last']): ?>
    <tr class="bgred">
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sname']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sex']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['birthday']; ?>
</td>
    </tr>
    <?php else: ?>
    <tr>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sname']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['sex']; ?>
</td>
        <td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['birthday']; ?>
</td>
    </tr>
    <?php endif; ?>
    <?php endfor; endif; ?>
</table>
<hr/>
<?php unset($this->_sections['n1']);
$this->_sections['n1']['loop'] = is_array($_loop=($this->_tpl_vars['data'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n1']['name'] = 'n1';
$this->_sections['n1']['show'] = true;
$this->_sections['n1']['max'] = $this->_sections['n1']['loop'];
$this->_sections['n1']['step'] = 1;
$this->_sections['n1']['start'] = $this->_sections['n1']['step'] > 0 ? 0 : $this->_sections['n1']['loop']-1;
if ($this->_sections['n1']['show']) {
    $this->_sections['n1']['total'] = $this->_sections['n1']['loop'];
    if ($this->_sections['n1']['total'] == 0)
        $this->_sections['n1']['show'] = false;
} else
    $this->_sections['n1']['total'] = 0;
if ($this->_sections['n1']['show']):

            for ($this->_sections['n1']['index'] = $this->_sections['n1']['start'], $this->_sections['n1']['iteration'] = 1;
                 $this->_sections['n1']['iteration'] <= $this->_sections['n1']['total'];
                 $this->_sections['n1']['index'] += $this->_sections['n1']['step'], $this->_sections['n1']['iteration']++):
$this->_sections['n1']['rownum'] = $this->_sections['n1']['iteration'];
$this->_sections['n1']['index_prev'] = $this->_sections['n1']['index'] - $this->_sections['n1']['step'];
$this->_sections['n1']['index_next'] = $this->_sections['n1']['index'] + $this->_sections['n1']['step'];
$this->_sections['n1']['first']      = ($this->_sections['n1']['iteration'] == 1);
$this->_sections['n1']['last']       = ($this->_sections['n1']['iteration'] == $this->_sections['n1']['total']);
?>
<?php if ($this->_sections['n1']['index']%2 == 0): ?>
    <li  class="bgGreen"><?php echo $this->_tpl_vars['data'][$this->_sections['n1']['index']]['sname']; ?>
(<?php echo $this->_tpl_vars['data'][$this->_sections['n1']['index']]['birthday']; ?>
)</li>
<?php else: ?>
    <li><?php echo $this->_tpl_vars['data'][$this->_sections['n1']['index']]['sname']; ?>
(<?php echo $this->_tpl_vars['data'][$this->_sections['n1']['index']]['birthday']; ?>
)</li>
<?php endif; ?>
<?php endfor; endif; ?>
</body>
</html>