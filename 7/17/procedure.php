<?php
    include "db.php";
    $procedure=<<<str
create procedure c()
begin
    select * from user;
end;
str;
    exe($procedure);
