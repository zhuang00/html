<?php
    $db = new mysqli('localhost','root','456123','c1');
    //错误编码
    if($db->connect_errno){
        //输出错误信息
        exit($db->connect_error);
    }
    $db->query('set names utf8');
    $result = $db->query('select * from news');
    $rows =array();
    while($row = $result->fetch_assoc()){
        $rows[] = $row;
    }
    echo '<pre>';
    print_r($result->fetch_fields());exit;
    //释放结果集
    $result->free();
    ?>
    <table border="1" width="600">
            <tr>
                <td width="50">nid</td>
                <td>标题</td>
            </tr>
        <?php
        foreach ($rows as $field):
        ?>
            <tr>
                <td width="50"><?php echo $field['nid'];?></td>
                <td><?php echo $field['title'];?></td>
            </tr>
            <?php
            endforeach;
            ?>
    </table>
    <?php
    echo "共有{$db->affected_rows}条";
    ?>