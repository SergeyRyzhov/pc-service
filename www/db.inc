<?php
	define('BASENAME', 'remont');
	define('HOSTNAME', 'localhost');
	define('USERNAME', '123456');
	define('PASSWORD', '123456');
	@mysql_connect(localhost, 123456, 123456) or exit('������ ��� ����������� � ���� ������.');
	@mysql_select_db(remont) or exit('������ ��� ������ ���� ������.');	
?>