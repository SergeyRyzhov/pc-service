<?php
	define('BASENAME', 'remont');
	define('HOSTNAME', 'localhost');
	define('USERNAME', '123456');
	define('PASSWORD', '123456');
	@mysql_connect(localhost, 123456, 123456) or exit('Ошибка при подключении к базе данных.');
	@mysql_select_db(remont) or exit('Ошибка при выборе базы данных.');	
?>