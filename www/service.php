<?php
	include('core.inc');
	include('db.inc');
	$title = '�������������� ������';
	include('header.inc');
?>

<h4>��� ��� ��� �� �������� ��������� ������</h4>
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