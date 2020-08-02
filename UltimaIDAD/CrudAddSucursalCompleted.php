<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

		<?php  #LOG ONLY ADMIN
			include('CrudAdminLog.php');  ?>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


Add Sucursal completed
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into sucursales
	(LOCAL) 
	values ('$_REQUEST[local]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<center><h2>Perfecto.</h2>";

$Local=$_POST['local'];


echo " <center><h3>Se ha registrado la Sucursal: $Local.</h3>";
  ?>

<form action="CrudAddSucursal.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>