<?php /* Smarty version 2.6.30, created on 2017-06-30 07:48:56
         compiled from addshow.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo @__HDEASY__; ?>
/plugin/kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="<?php echo @__HDEASY__; ?>
/plugin/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="<?php echo @__HDEASY__; ?>
/plugin/kindeditor/lang/zh_CN.js"></script>
    <?php echo '
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create(\'textarea[name="blog_content"]\', {
                allowFileManager: true
            });
        })
    </script>
    '; ?>

</head>
<body>
<form action="<?php echo $this->_tpl_vars['__control__']; ?>
&m=add" method="post">
    <table border="1" width="100%">
        <tr>
            <th width="100">标题</th>
            <td>
                <input type="text" name="blog_title"/>
            </td>
        </tr>
        <tr>
            <th width="100">栏目</th>
            <td>
               <select name="category_id">
                   <option value="0">===选择栏目===</option>
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
                   <option value="<?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['category'][$this->_sections['n']['index']]['category_name']; ?>
</option>
                    <?php endfor; endif; ?>
               </select>
            </td>
        </tr>
        <tr>
            <th width="100">标题</th>
            <td>
                <textarea name="blog_content" style="width:100%;height:300px;visibility:hidden;"></textarea>
            </td>
        </tr>
        <tr>
            <th width="100">点击次数</th>
            <td>
                <input type="text" name="blog_click" value="100"/>
            </td>
        </tr>
        <tr>
          <th colspan="2">
              <input type="submit" value="添加博客"/>
          </th>
        </tr>
    </table>
</form>
</body>
</html>