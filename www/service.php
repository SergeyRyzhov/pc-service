<?php
	include('core.inc');
	include('db.inc');
	$title = 'Дополнительные услуги';
	include('header.inc');
?>

<h4>Для Вас так же доступны следующие услуги</h4>
	<?php
		$results = mysql_query("SELECT * FROM services");
		while($row = mysql_fetch_array($results)) {
		?>
			<p>
				<div>
					<strong>
						<small><?php echo $row['id']?></small>
						<?php echo $row['title']?>
					</strong>
					<p><?php echo $row['description']?></p>
				</div>
			</p>
	
		<?php
		}
	?>
<?php
	include('footer.inc');
?>