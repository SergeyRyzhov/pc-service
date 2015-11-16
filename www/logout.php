<?php
	include('core.inc');
  session_unset();
  session_destroy();
  
  header('Location: index.php');
?>