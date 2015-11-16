<?php
    sleep(2);
    
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    
    //получить id пользовател€
    // есть - указать на ошибку / перейти к авторизации
    // нет - зарегистрировать с ролью - user    
    exit('ƒобавление за€вок с регистрацией не реализовано');
    
    $sql = "insert into orders values(Null, '{$subject}','{$description}', NOW(), '{$userId}')";
    $res = mysql_query($sql) or exit('ќшибка при выполнении запроса к базе данных.');
?>