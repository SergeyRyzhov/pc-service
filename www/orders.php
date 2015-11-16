<?php
	include('core.inc');
	include('db.inc');
	
	$title = 'Доступные заказы';
	include('header.inc');
?>

<h4>Заказы ожидающие обработки</h4>
<center>
<table border=1>
	<thead>
		<tr>
			<td>Id</td>
			<td>Тема</td>
			<td>Описание</td>
			<td>Дата заявки</td>
			<td>Пользователь</td>
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