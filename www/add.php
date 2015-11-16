<?php
	include('core.inc');
	include('db.inc');
	
	$title = '�������� ������';
	
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

<h4>������� �������� � �������� ���� ���������� ������</h4>
<center>
<form action="add.php" method="POST">
	<p>
		<span>���������</span>
		<input name="subject" type="text"/>
	</p>
	<p>
		<span>��������</span>
		<textarea name="description"></textarea>
	</p>
	<?php if(!isset($userName)): ?>
	<p>
		<span>���</span>
		<input name="name" type="text" value="<?php echo $userName ?>"/>
	</p>
	<p>
		<span>����� ����������� �����</span>
		<input name="email" type="text" />
	</p>
	<p>
		<span>������ <small>��������� ��� �������� ������� ������</small></span>
		<input name="password" type="password"/>
	</p>
	<?php endif ?>
	<button>��������� ������</button>
</form>
</center>
<?php
	include('footer.inc');
?>