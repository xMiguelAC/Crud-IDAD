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


Sucursal
<hr>

<form action="CrudAddSucursal.PHP">
	<input type="submit" name="sucursal" value="Crear Sucursal">
</form>

<form action="#">
	<input type="submit" name="sucursal" value="Crear Usuario">
</form>



<br>


<br>


	<form action="CrudMenuGeneral.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>