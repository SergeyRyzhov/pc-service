</TD>
</TR>
<TR BGCOLOR="#000099">
	<?php if (isset($userName)): ?>
		<TD COLSPAN="2" VALIGN="top">
			Добро пожаловать, <?php echo $userName ?>
			<A CLASS="nav" HREF="logout.php">выйти</A>
		</TD>
	<?php else: ?>
		<TD COLSPAN="2" VALIGN="top">
			<A CLASS="nav" HREF="login.php">войти</A>
		</TD>
	<?php endif ?>
	<TD ALIGN="right" VALIGN="top">
		<P CLASS="nav">Программирование и оформление &copy;&nbsp;2015,
			<A CLASS="nav" HREF="http://deepcoding.ru">deepcoding.ru</A>
	</TD>
</TR>
</TABLE>
</BODY>

</HTML>