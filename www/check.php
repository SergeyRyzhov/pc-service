<?php
	include('core.inc');
	$title = '�������� ������� ������';
	include('header.inc');
?>

<h4>������� ����� ���������� ��� ������ ������</h4>
<center>
<form action="check.php" method="POST">
	<p>
		<span>����� ������</span>
		<input name="number" type="text"/>
	</p>
	<p>
		<span>������ <small>�������� ��� � ����������</small></span>
		<input name="password" type="password"/>
	</p>
	<button>������ ������</button>
</form>
</center>
<?php
	include('footer.inc');
?>