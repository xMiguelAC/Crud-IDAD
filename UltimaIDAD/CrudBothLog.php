<?php

	session_start();

	if (!isset($_SESSION['rol'])) {
		header('location: index.php');
	} else {
		if ($_SESSION['rol'] != 1 && $_SESSION['rol'] !=3){
			header('location: index.php');
		}
	}

	?>