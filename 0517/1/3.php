<?php
    session_start();
    setcookie(session_name(),session_id(),time()+3600,"/");
    if(isset($_SESSION['login'])) {
        ?>
        <h1>你已经登录</h1>
        <?php
    }else{
?>
<form action="3.1.php" method="post">
username:<input type="text" name="username"/><br/>
username:<input type="password" name="password"/><br/>
<input type="submit"/>
</form>
<?php
    }
?>