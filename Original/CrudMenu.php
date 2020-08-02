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


Menu
<hr>
<br>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Curso</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM registro");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['NOMBRE'];?></td>
		<td><?php echo $consulta['EDAD'];?></td>
		<td><?php echo $consulta['CURSO'];?></td>
		<td><form action="CrudEditingTwo.php?editz=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="+"></form></td>
		<td><form action="CrudDelete.php?delete=<?php echo $consulta['ID']; ?>" method="post"><input type="submit" name="deleted" value="x"></form></td>
		<td><?php } ?></td>
	</tr>
</table

<br>
<br>
	<form action="CrudAdd.html" method="post">
		<input type="submit" value="Add" name="agregar">
	</form>

	<form action="index.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>