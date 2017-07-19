<?php /* Smarty version 2.6.30, created on 2017-06-29 13:00:09
         compiled from upd.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>编辑栏目</h1>
<form action="<?php echo $this->_tpl_vars['__control__']; ?>
&m=upd" method="post">
    <table border="1" width="100%">
        <tr>
            <th width="100">栏目名称</th>
            <td>
                <input type="text" style="width:260px;" name="category_name"/>
            </td>
        </tr>
        <tr>
            <th>栏目关键字</th>
            <td>
                <input type="text" style="width:260px;" name="category_keyword"/>
            </td>
        </tr>
        <tr>
            <th>栏目描述</th>
            <td>
                <textarea cols='30' rows='6'name="category_desciption"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="修改栏目">
            </td>
        </tr>
    </table>
</form>
</body>
</html>