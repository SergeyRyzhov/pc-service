<?php
	include('core.inc');
	include('db.inc');
	
	$title = 'Создание заявки';
	
	if ($method == 'POST' and isset($_POST['email'])){
		include('addNewUser.inc');
		header('Location: index.php');
	}	
	
	if ($method == 'POST' and !isset($_POST['email'])){
		include('addSimple.inc');
		header('Location: index.php');
	}
	
	include('header.inc');
?>

<h4>Опишите проблему и оставьте свои контактные данные</h4>
<center>
<form action="add.php" method="POST">
	<p>
		<span>Заголовок</span>
		<input name="subject" type="text"/>
	</p>
	<p>
		<span>Описание</span>
		<textarea name="description"></textarea>
	</p>
	<?php if(!isset($userName)): ?>
	<p>
		<span>Имя</span>
		<input name="name" type="text" value="<?php echo $userName ?>"/>
	</p>
	<p>
		<span>Адрес электронной почты</span>
		<input name="email" type="text" />
	</p>
	<p>
		<span>Пароль <small>необходим для проверки статуса заявки</small></span>
		<input name="password" type="password"/>
	</p>
	<?php endif ?>
	<button>Отправить заявку</button>
</form>
</center>
<?php
	include('footer.inc');
?>