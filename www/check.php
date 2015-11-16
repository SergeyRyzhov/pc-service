<?php
	include('core.inc');
	$title = 'Проверка статуса заявки';
	include('header.inc');
?>

<h4>Введите номер полученный при подаче заявки</h4>
<center>
<form action="check.php" method="POST">
	<p>
		<span>Номер заявки</span>
		<input name="number" type="text"/>
	</p>
	<p>
		<span>Пароль <small>введённые при её оформлении</small></span>
		<input name="password" type="password"/>
	</p>
	<button>Узнать статус</button>
</form>
</center>
<?php
	include('footer.inc');
?>