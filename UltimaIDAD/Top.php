<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

	<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); 

    include_once 'database.php';
?>


<div class="navbar">
	<center><h1>LYA: makeup academy</h1></center>
</div>