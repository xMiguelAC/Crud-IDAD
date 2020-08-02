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


Edit menu
<br>
<br>
<br>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Curso</th>
			<th>Accion</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM registro");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['NOMBRE'];?></td>
		<td><?php echo $consulta['EDAD'];?></td>
		<td><?php echo $consulta['CURSO'];?></td>
		<td><?php echo "<a href='CrudEditing.php'>Editar</a>/<a href='CrudDelete.php'>Borrar</a>"?></td>
		<td><?php } ?></td>
	</tr>
</table>

<?php
/* 
$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

$resultados = mysqli_query($conexion,"SELECT * FROM registro");
while($consulta = mysqli_fetch_array($resultados)){
	    echo "Nombre: ";
	    echo $consulta['NOMBRE']."<br>";
	    echo "<form action='CrudEditing.php'><input type='submit' value='editar nombre'></form>";
	    echo "Edad: ";
	    echo $consulta['EDAD']."<br>";
	    echo "<form action='CrudEditing.php'><input type='submit' value='editar edad'></form>";
	    echo "Curso: ";
	    echo $consulta['CURSO']."<br>";
	    echo "<form action='CrudEditing.php'><input type='submit' value='editar curso'></form>"; 
		echo "<hr>";}  

		*/

	    ?>

<form action="CrudMenu.php" method="post">
	<input type="submit" value="back" name="back">
</form>

</body>
</html>