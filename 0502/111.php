<?php
ob_start(); // 开启output buffer
echo 'buffer id 1....'; // 往buffer里写入数据
$data1 = ob_get_contents(); // 从buffer里取出数据 buffer id 1....
echo 'buffer id 2....'; // 继续往buffer里写入数据
$data2 = ob_get_contents(); //从buffer里取出数据 buffer id 1....buffer id 1....buffer id 2....
ob_end_clean(); // 关闭并清空buffer流
echo $data1;
echo $data2;