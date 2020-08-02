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


Add menu completed
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into registro
	(NOMBRE,EDAD,CURSO) 
	values ('$_REQUEST[name]','$_REQUEST[age]','$_REQUEST[course]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<h2>Perfecto.</h2>";

$Name=$_POST['name'];
$Age=$_POST['age'];
$Course=$_POST['course'];


echo " <h3>Se ha registrado correctamente el Usuario: $Name, de la Edad: $Age, del Curso: $Course.</h3>";
  ?>

<form action="CrudMenu.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>