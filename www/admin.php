<?php
	include('core.inc');
	
	if (!$isAdmin)
	{
		header('Location: login.php');
		exit;
	}
	
	include('db.inc');
	
	if ($method == 'POST' and isset($_POST['add'])) {
		include('adminAdd.inc');
	}
	
	if ($method == 'POST' and isset($_POST['remove'])) {
		include('adminRemove.inc');
	}
	
	if ($method == 'POST' and isset($_POST['newservice'])) {
		include('adminNewService.inc');
	}
	
	
	$title = '������ ��������������';
	include('header.inc');
?>
	
<h4>������ ��������������</h4>


<center>
<table>
	<tbody>
		<tr>
			<td>
<table border=1>
	<thead>
		<tr>
			<td>Id</td>
			<td>���</td>
			<td>email</td>
		</tr>
	</thead>
	<tbody>
	<?php
		$results = mysql_query("SELECT * FROM users");
		while($row = mysql_fetch_array($results)) {
		?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
			</tr>
	
		<?php
		}
	?>
	</tbody>
</table>
</td>
<td>
<table border=1>
	<thead>
		<tr>
			<td>��� ������������</td>
			<td>����</td>
		</tr>
	</thead>
	<tbody>
	<?php
		$results = mysql_query("SELECT u.name, r.role FROM userinroles AS ur LEFT JOIN users AS u ON ur.userid = u.id LEFT JOIN roles AS r ON ur.roleid = r.id");
		while($row = mysql_fetch_array($results)) {
		?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['role']?></td>
			</tr>
	
		<?php
		}
	?>
	</tbody>
</table>
</td></tr></tbody></table>
<form action="admin.php" method="POST">
	<p>
		<span>������������</span>
		<select name="user">
		<?php $results = mysql_query("SELECT * FROM users"); while($row = mysql_fetch_array($results)) { ?>
			<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>	
		<?php }	?>
		</select>
	</p>
	<p>
		<span>����</span>
		<select name="role">
		<?php $results = mysql_query("SELECT * FROM roles"); while($row = mysql_fetch_array($results)) { ?>
			<option value="<?php echo $row['id']?>"><?php echo $row['role']?></option>	
		<?php }	?>
		</select>
	</p>
  <input type="submit" value="����� � ����" name="remove" />
  <input type="submit" value="��������� �� ����" name="add">
  <p>
		<span>������</span>
		<input name="title" type="text"/>
	</p>
	<p>
		<span>�������� ������</span>
		<textarea name="description"></textarea>
	</p>
  <input type="submit" value="�������� ������" name="newservice">
</form>
</center>
<?php
	include('footer.inc');
?>