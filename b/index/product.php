<?php
header("HTTP/1.1 301 Moved Permanently");
header("location:./?" .str_replace('product','goods',$url));
exit();
?>