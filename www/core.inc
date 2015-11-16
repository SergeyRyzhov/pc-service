<?php
	session_start();
	$userName = $_SESSION['user'];	
	$userId = $_SESSION['userid'];	
	$roles = isset($_SESSION['roles']) ? $_SESSION['roles']: Array();
	
	$isAdmin = in_array('admin', $roles);
	$isMaster = in_array('master', $roles);
	$isUser = in_array('user', $roles);
	
	$method = $_SERVER['REQUEST_METHOD'];
?>