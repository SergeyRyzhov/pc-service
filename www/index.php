<?php
	include('core.inc');
	$title = 'Главная';
	include('header.inc');
?>

<h4>Обращайтесь в наш замечательный сервис!</h4>
<div>
<h5>Информация для разработчика</h5>

Пользователь: <?php echo $userName; ?> <br/>
Id пользователя: <?php echo $userId; ?> <br/>
Роли пользователя: <?php print_r(array_values($roles)); ?>
</div>

<?php
	include('footer.inc');
?>