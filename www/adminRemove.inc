<?php
    sleep(2);
    
    $userid = $_POST['user'];
    $roleid = $_POST['role'];
    
    $check = "select * from userinroles where userid='{$userid}' and roleid='{$roleid}'";    
    $checkres = mysql_query($check) or exit('Ошибка при выполнении запроса к базе данных.');
    
    if(mysql_num_rows($checkres) == 1)
    {
        $sql = "delete from userinroles where userid='{$userid}' and roleid='{$roleid}'";
        $res = mysql_query($sql) or exit('Ошибка при выполнении запроса к базе данных.');
    }
?>