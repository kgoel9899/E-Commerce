<?php
	require "../includes/common.php";
	if (!isset($_SESSION['email'])) {
	    header('location: login.php');
	}
	session_destroy();
	header('location: index.php');
?>