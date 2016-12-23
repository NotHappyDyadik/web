<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['au']);
					header("Location: index.php");
					session_destroy();
		
header("Location: index.php");
	?>
