<?php
    sleep(2);
    
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    
    $sql = "insert into orders values(Null, '{$subject}','{$description}', NOW(), '{$userId}')";
    $res = mysql_query($sql) or exit('Ошибка при выполнении запроса к базе данных.');
?>