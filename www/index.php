<?php
	include('core.inc');
	$title = '�������';
	include('header.inc');
?>

<h4>����������� � ��� ������������� ������!</h4>
<div>
<h5>���������� ��� ������������</h5>

������������: <?php echo $userName; ?> <br/>
Id ������������: <?php echo $userId; ?> <br/>
���� ������������: <?php print_r(array_values($roles)); ?>
</div>

<?php
	include('footer.inc');
?>