<?php
	include('core.inc');
	include('db.inc');
	$title = '����';
	if ($method == 'POST' and isset($_POST['login']) and isset($_POST['password'])) {
		include('logincore.inc');
	}
	
	include('header.inc');
?>

<h4>�������, ������ ����� � ������.</h4>
<center>
	<strong><?php echo $err ?></strong>
<form action="login.php" method="POST">
	<p>
		<span>��� �����������</span>
		<input name="login" type="text"/>
	</p>
	<p>
		<span>������</span>
		<input name="password" type="password"/>
	</p>
	<button>�����</button>
</form>
</center>

<?php
  if (isset($err)) echo "<P CLASS=\"error\">��������! {$err}</P>\r\n";
  include('footer.inc');
?>