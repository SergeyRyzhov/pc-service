<?php
	include('core.inc');
	include('db.inc');
	$title = 'Вход';
	if ($method == 'POST' and isset($_POST['login']) and isset($_POST['password'])) {
		include('logincore.inc');
	}
	
	include('header.inc');
?>

<h4>Войдите, указав логин и пароль.</h4>
<center>
	<strong><?php echo $err ?></strong>
<form action="login.php" method="POST">
	<p>
		<span>Имя пользоватля</span>
		<input name="login" type="text"/>
	</p>
	<p>
		<span>Пароль</span>
		<input name="password" type="password"/>
	</p>
	<button>Войти</button>
</form>
</center>

<?php
  if (isset($err)) echo "<P CLASS=\"error\">Внимание! {$err}</P>\r\n";
  include('footer.inc');
?>