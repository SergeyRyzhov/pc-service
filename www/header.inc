<?php 
	define('SUBTITLE', 'deepcoding.ru');
?>
	<HTML>

	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
		<TITLE>
			<?php echo $title ?>: ��������� ����� �� ������� ������������ �������
		</TITLE>
		<LINK REL="stylesheet" HREF="style.css" TYPE="text/css">
		<SCRIPT language="javascript">
			function Bookmark() {
				if(window.external.AddFavorite)
					window.external.AddFavorite(location.href, '��������� ����� �� ������� ������������ �������');
				else
					alert('��� ������� �� ������������ ��� �������. �������� � �������� �������.');
			}
		</SCRIPT>
	</HEAD>

	<BODY BGCOLOR="#FFFFFF">
		<TABLE BORDER="0" CELLSPACING="00" CELLPADDING="50" WIDTH="100%">
			<TR BGCOLOR="#000">
				<TD WIDTH="30%" VALIGN="TOP" NOWRAP>
					<P CLASS="nav">
						
						<A CLASS="nav" HREF="index.php">�������</A>
						<BR>
						<A CLASS="nav" HREF="add.php">������� ������</A>
						<BR>
						<?php if ($isUser): ?>
						<A CLASS="nav" HREF="check.php">��������� ������</A>
						<BR>
						<?php endif ?>
						<A CLASS="nav" HREF="service.php">�������������� ������</A>
						<BR>
						<A CLASS="nav" HREF="about.php">� ���</A>
						<BR>
						
						<?php if ($isMaster): ?>
						<A CLASS="nav" HREF="orders.php">��������� ������</A>
						<BR>
						<?php endif ?>
						
						<?php if ($isAdmin): ?>
						<A CLASS="nav" HREF="admin.php">������ ��������������</A>
						<BR>
						<?php endif ?>
					</P>

				</TD>
				<TD ALIGN="center" VALIGN="top">
					<IMG SRC="logo.png" WIDTH="300" HEIGHT="300" ALT="��������� ����� �� ������� ������������ �������">
				</TD>
				<TD WIDTH="30%" ALIGN="right" VALIGN="top">
					<P CLASS="nav">
						<?php echo SUBTITLE ?>
					</P>
					<P CLASS="big">������ �����������
						<input type="button" onclick="Bookmark()" value="&star;" itle="�������� � ��������" />
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