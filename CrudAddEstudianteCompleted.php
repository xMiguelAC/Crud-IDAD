<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


Add to Sucursal completed
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into registro
	(LOCAL) 
	values ('$_REQUEST[local]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<h2>Perfecto.</h2>";

$Local=$_POST['local'];

echo " <h3>Se ha registrado en $Local.</h3>";
  ?>

<form action="CrudMenu.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>