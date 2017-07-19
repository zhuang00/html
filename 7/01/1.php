<?php
    include "db.php";
    $data = query("select * from category");
?>
<table>
    <tr>
        <td>CID</td>
        <td>栏目名称</td>
        <td>操作</td>
    </tr>
<?php
    foreach($data as $field):
?>

    <tr>
        <td><?php echo $field['cid'];?></td>
        <td><?php echo $field['cname'];?></td>
        <td>
            <a href="delCategoryPro.php?cid=<?php echo $field['cid'];?>">删除</a>
        </td>
    </tr>
<?php
    endforeach;
?>
</table>