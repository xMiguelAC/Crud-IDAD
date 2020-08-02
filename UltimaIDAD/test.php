
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>y Apellido</th>
			<th>Curso</th>
			<th>Estado</th>
			<th>Agregar</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM estudiantes");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['NOMBRE'];?></td>
		<td><?php echo $consulta['APELLIDO'];?></td>
		<td><?php echo $consulta['CURSO'];?></td>
		<td><?php echo $consulta['ESTADO'];?></td>
		<td><form action="CrudAddEstudianteCompleted.php?add=<?php echo $Local2; ?>"method="post"><input type="submit" name="add" value="+"></form></td>
		<td><form action="CrudEditingTwoEstudiante.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="!"></form></td>
		<td><form action="CrudDeleteEstudiante.php?deleteestudiante=<?php echo $consulta['ID']; ?>" method="post"><input type="submit" name="deletedest" value="x"></form></td>
		<td><?php } ?></td>
	</tr>
</table>





#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#




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

<?php 
if (isset($_GET['sucursal'])) {

    $Local2 = $_GET['sucursal'];

     } ?>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


<!--Menu
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
</table>

<br>

	<form action="CrudAdd.html" method="post">
		<input type="submit" value="Add" name="agregar">
	</form>


<br>
<br> -->
Users
<hr>


<form action="CrudMenuUser.php" method="post">
	Buscar User:
	<input type="text" name="NameEstudiante" placeholder="Fulano">
	Tipo:
    <select name="course">
		  <option value="Diseno">User</option>
		  <option value="Redes">Admin</option>
		</select>

	<input type="submit" name="search" value="Buscar">
</form>
<br>
<?php  

	if (isset($_POST['search'])) {

		$NameEST=$_POST['NameEstudiante'];

		 

echo "<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>User</th>
				<th>Password</th>
				<th>Tipo</th>
				<th>Localidad</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		 </thead> 
		</table>";

$resultados = mysqli_query($conexion,"SELECT * FROM users WHERE USER like '%$NameEST%' ");
		while($consulta = mysqli_fetch_array($resultados)){


		 echo $consulta['ID'];
		 echo $consulta['USER'];
		 echo $consulta['PASSWORD'];
		 echo $consulta['TYPE'];
		 echo $consulta['LOCALIDAD'];
		 echo "<br>"; 

		 
   		 
  }

}
	

?>


<br>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Password</th>
			<th>Tipo</th>
			<th>Localidad</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM users");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['USER'];?></td>
		<td><?php echo $consulta['PASSWORD'];?></td>
		<td><?php 
			$tipe = $consulta['TYPE'];
			if ($tipe==1) {
				echo "Admin";
			} else{
				echo "Usuario";
			}
									?></td>
		<td><?php echo $consulta['LOCALIDAD'];?></td>
		<td><form action="CrudEditingTwoEstudiante.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="!"></form></td>
		<td><form action="CrudDeleteEstudiante.php?deleteestudiante=<?php echo $consulta['ID']; ?>" method="post"><input type="submit" name="deletedest" value="x"></form></td>
		<td><?php } ?></td>
	</tr>
</table>

<br>

	<form action="CrudInscripcionEstudiante.html" method="post">
		<input type="submit" value="Inscribir Estudiante" name="agregar">
	</form>

	<form action="CrudMenuGeneral.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>

























































CRUD MENU USER


<?php  
if (isset($_POST['a'])) {
	?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Password</th>
			<th>Tipo</th>
			<th>Sucursal</th>
			<th>Agregar</th>
		</tr>
	</thead> <?php $resultados = mysqli_query($conexion,"SELECT * FROM users");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['USER'];?></td>
		<td><?php echo $consulta['PASSWORD'];?></td>
		<td><?php echo $consulta['TYPE'];?></td>
		<td><?php echo $consulta['LOCALIDAD'];?></td>
		<td><form action="CrudEditingTwoEstudiante.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="+"></form></td>
		<td><?php } ?></td>
	</tr>
</table>
<br>

	<form action="CrudInscripcionEstudiante.html" method="post">
		<input type="submit" value="Inscribir Estudiante" name="agregar">
	</form>

	<form action="CrudAddSucursal.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>
<?php

} ?>













mysqli_query($conexion,"insert into users
	(LOCALIDAD) values ('$_SESSION[IDLocal]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);
