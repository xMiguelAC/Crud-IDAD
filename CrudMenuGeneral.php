<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>


<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


Menu General
<hr>
<br>

<form action="CrudMenu.php" method="post">
		<input type="submit" value="Estudiantes" name="">
	</form>

	<form action="CrudSucursal.php" method="post">
		<input type="submit" value="Sucursal" name="">
	</form>

<br>

	<form action="index.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>