<?php
    sleep(2);
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    
	$sql = "insert into services values(null, '{$title}','{$description}')";
	$res = mysql_query($sql) or exit('Ошибка при выполнении запроса к базе данных.');
?>