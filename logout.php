<?php
	require 'include/config.php';
	if (isset($_SESSION['account']))
	{
		session_destroy();
	}
	header('Location: index.php');
?>