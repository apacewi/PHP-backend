<?php

	session_start();
	
	session_unset();
	$_SESSION['logout']='<div style=padding-bottom:10px>Nastąpiło wylogowanie.</div>';
	
	header('Location: logowanie.php');
?>