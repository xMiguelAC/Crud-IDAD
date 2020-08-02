<?php    #Header or Navbar
    include('Top.php'); ?>
			<?php  #LOG ONLY Empleados
			include('CrudBothLog.php');  ?>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>

<?php 
if (isset($_GET['sucursal'])) {

    $Local2 = $_GET['sucursal'];

     } ?>



Estudiantes
<hr>


<form action="CrudMenu.php" method="post">
	Buscar Estudiante:
	<input type="text" name="NameEstudiante" placeholder="Fulano">
	Curso:
    <select name="course">
		  <option value="Diseno">Diseno</option>
		  <option value="Redes">Redes</option>
		</select>
		Estado:
		<select name="state">
		  <option value="Pendiente">Pendiente</option>
		  <option value="Inscrito">Inscrito</option>
		</select>
		Mes:
		<select name="month">
		  <option value="Enero">Enero</option>
		  <option value="Febrero">Febrero</option>
		  <option value="Marzo">Marzo</option>
		  <option value="Abril">Abril</option>
		  <option value="Mayo">Mayo</option>
		  <option value="Junio">Junio</option>
		  <option value="Julio">Julio</option>
		  <option value="Agosto">Agosto</option>
		  <option value="Septiembre">Septiembre</option>
		  <option value="Octubre">Octubre</option>
		  <option value="Noviembre">Noviembre</option>
		  <option value="Diciembre">Diciembre</option>
		</select>

	<input type="submit" name="search" value="Buscar">
</form>
<br>



<?php  
if (isset($_POST['student'])) {
	?>

	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>y Apellido</th>
			<th>Curso</th>
			<th>Estado</th>
			<th>Comprobante</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead> <?php $resultados = mysqli_query($conexion,"SELECT * FROM estudiantes");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['NOMBRE'];?></td>
		<td><?php echo $consulta['APELLIDO'];?></td>
		<td><?php echo $consulta['CURSO'];?></td>
		<td><?php echo $consulta['ESTADO'];?></td>
		<td><center><form action="CrudMostrarImagen.php?ver=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="ver" value="O"></form></center></td>
		<td><form action="CrudEditingTwoEstudiante.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="!"></form></td>
		<td><form action="CrudDeleteEstudiante.php?deleteestudiante=<?php echo $consulta['ID']; ?>" method="post"><input type="submit" name="deletedest" value="x"></form></td>
		<td><?php } ?></td>
	</tr>
</table> <?php

}


	if (isset($_POST['search'])) {

		$NameEST=$_POST['NameEstudiante'];

		 

echo "<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>y Apellido</th>
				<th>Curso</th>
				<th>Estado</th>
				<th>Comprobante</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>";

$resultados = mysqli_query($conexion,"SELECT * FROM estudiantes WHERE NOMBRE like '%$NameEST%' ");
		while($consulta = mysqli_fetch_array($resultados)){


		 ?>

		<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['NOMBRE'];?></td>
		<td><?php echo $consulta['APELLIDO'];?></td>
		<td><?php echo $consulta['CURSO'];?></td>
		<td><?php echo $consulta['ESTADO'];?></td>
		<td><center><form action="CrudMostrarImagen.php?ver=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="ver" value="O"></form></center></td>
		<td><form action="CrudEditingTwoEstudiante.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="!"></form></td>
		<td><form action="CrudDeleteEstudiante.php?deleteestudiante=<?php echo $consulta['ID']; ?>" method="post"><input type="submit" name="deletedest" value="x"></form></td>
		<td><?php } ?></td>
	</tr>
</table>


		 

	<?php
		 	}
   	


   		 		?>


<br>

<br>

	<form action="CrudInscripcionEstudiante.PHP" method="post">
		<input type="submit" value="Inscribir Estudiante" name="agregar">
	</form>

	<form action="CrudMenuGeneral.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>