<?php
    include "common.php";
    if(!isset($_COOKIE['admin'])){
        echo"<h1>你没有权限访问HD商城后台</h1>
          <script>
          setTimeout(function(){location.href='login.php?action=show'},3000);
</script>";
    exit;
    }

    include "tpl/admin/index.html";