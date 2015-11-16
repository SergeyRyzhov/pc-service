<?php 
	define('SUBTITLE', 'deepcoding.ru');
?>
	<HTML>

	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
		<TITLE>
			<?php echo $title ?>: Сервисный центр по ремонту компьютерной техники
		</TITLE>
		<LINK REL="stylesheet" HREF="style.css" TYPE="text/css">
		<SCRIPT language="javascript">
			function Bookmark() {
				if(window.external.AddFavorite)
					window.external.AddFavorite(location.href, 'Сервисный центр по ремонту компьютерной техники');
				else
					alert('Ваш браузер не поддерживает эту функцию. Добавьте в закладки вручную.');
			}
		</SCRIPT>
	</HEAD>

	<BODY BGCOLOR="#FFFFFF">
		<TABLE BORDER="0" CELLSPACING="00" CELLPADDING="50" WIDTH="100%">
			<TR BGCOLOR="#000">
				<TD WIDTH="30%" VALIGN="TOP" NOWRAP>
					<P CLASS="nav">
						
						<A CLASS="nav" HREF="index.php">Главная</A>
						<BR>
						<A CLASS="nav" HREF="add.php">Создать заявку</A>
						<BR>
						<?php if ($isUser): ?>
						<A CLASS="nav" HREF="check.php">Проверить статус</A>
						<BR>
						<?php endif ?>
						<A CLASS="nav" HREF="service.php">Дополнительные услуги</A>
						<BR>
						<A CLASS="nav" HREF="about.php">О нас</A>
						<BR>
						
						<?php if ($isMaster): ?>
						<A CLASS="nav" HREF="orders.php">Доступные заказы</A>
						<BR>
						<?php endif ?>
						
						<?php if ($isAdmin): ?>
						<A CLASS="nav" HREF="admin.php">Панель администратора</A>
						<BR>
						<?php endif ?>
					</P>

				</TD>
				<TD ALIGN="center" VALIGN="top">
					<IMG SRC="logo.png" WIDTH="300" HEIGHT="300" ALT="Сервисный центр по ремонту компьютерной техники">
				</TD>
				<TD WIDTH="30%" ALIGN="right" VALIGN="top">
					<P CLASS="nav">
						<?php echo SUBTITLE ?>
					</P>
					<P CLASS="big">Ремонт компьютеров
						<input type="button" onclick="Bookmark()" value="&star;" itle="Добавить в закладки" />
					</P>
					<P CLASS="big">
						<?php echo $title ?>
					</P>
				</TD>
			</TR>
			<TR>
			</TR>
			<TR>
				<TD COLSPAN="3">