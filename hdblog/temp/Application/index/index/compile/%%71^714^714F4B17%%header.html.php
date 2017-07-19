<?php /* Smarty version 2.6.30, created on 2017-07-01 02:32:31
         compiled from header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>zhuang博客</title>
    <link rel="stylesheet" type="text/css" href="./index/tpl/index/css/css.css";/>
</head>
<body>
<div id="top">
    <div class="menu">
        <h3>
            后盾网向军
            <a href="<?php echo $this->_tpl_vars['__web__']; ?>
/admin.php" style='color:yellow'>管理</a>
        </h3>
    </div>
</div>
<div id="main">
    <!--导航-->
    <div id="nav">
        <a href="<?php echo $this->_tpl_vars['__web__']; ?>
">首页</a>|
        <?php unset($this->_sections['c']);
$this->_sections['c']['loop'] = is_array($_loop=($this->_tpl_vars['category'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
        <a href="<?php echo $this->_tpl_vars['__control__']; ?>
&m=cat&cid=<?php echo $this->_tpl_vars['category'][$this->_sections['c']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['category'][$this->_sections['c']['index']]['category_name']; ?>
</a>|
        <?php endfor; endif; ?>
    </div>

    <!--导航-->