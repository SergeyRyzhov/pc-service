<?php
	include('core.inc');
	include('db.inc');
	
	$title = '��������� ������';
	include('header.inc');
?>

<h4>������ ��������� ���������</h4>
<center>
<table border=1>
	<thead>
		<tr>
			<td>Id</td>
			<td>����</td>
			<td>��������</td>
			<td>���� ������</td>
			<td>������������</td>
		</tr>
	</thead>
	<tbody>
	<?php
		$results = mysql_query("SELECT o.*, u.name FROM orders as o inner join users as u on o.userid=u.id");
		while($row = mysql_fetch_array($results)) {
		?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['subject']?></td>
				<td><?php echo $row['description']?></td>
				<td><?php echo $row['date']?></td>
				<td><?php echo $row['name']?></td>
			</tr>
	
		<?php
		}
	?>
	</tbody>
</table>
<center>
<?php
	include('footer.inc');
?>