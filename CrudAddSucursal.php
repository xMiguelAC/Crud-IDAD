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


Agregar Sucursal
<hr>
<br>

<form action="CrudAddSucursalCompleted.php" method="post">
	Local:
	<input type="text" name="local" placeholder="San Vicente">
	<input type="submit" value="Crear" name="">
</form>

<BR>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Local</th>
			<th>Accion</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM sucursales");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['LOCAL'];?></td>
		<td><a href="CrudMenu.php?sucursal=<?php echo $consulta['LOCAL']; ?>">Agregar Persona</a></td>
		<td><?php } ?></td>
	</tr>
</table>


<br>

<form action="CrudSucursal.php" method="post">
	<input type="submit" value="back" name="back">
</form>

</body>
</html>

<!-- Input 1:
	<input type="number" name="age">
	Input 2:
	<input type="text" name="course"> -->