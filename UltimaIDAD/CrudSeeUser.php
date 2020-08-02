<?php    #Header or Navbar
    include('Top.php'); ?>

		<?php  #LOG ONLY ADMIN
			include('CrudAdminLog.php');  ?>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>

<?php 
if (isset($_GET['sucursal'])) {

    $Local2 = $_GET['sucursal'];

     } ?>



Ver Usuarios
<hr>


<form action="CrudSeeUser.php" method="post">
	
	Buscar Usuario:
	<input type="text" name="NameEstudiante" placeholder="Fulano">

	<input type="submit" name="search" value="Buscar">
</form>
<br>



<?php  
if (isset($_POST['see'])) {
	?>

	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Tipo</th>
			<th>sucursal</th>
			<th>Accion</th>
		</tr>
	</thead> <?php $resultados = mysqli_query($conexion,"SELECT * FROM users");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['USER'];?></td>
		<td><?php echo $consulta['TYPE'];?></td>
		<td><?php echo $consulta['LOCALIDAD'];?></td>
		<td><?php echo "<a href='CrudEditing.php'>Editar</a>/<a href='CrudDelete.php'>Borrar</a>"?></td>
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
				<th>User</th>
				<th>Tipo</th>
				<th>Localidad</th>
				<th>Accion</th>
			</tr>";

$resultados = mysqli_query($conexion,"SELECT * FROM users WHERE USER like '%$NameEST%' ");
		while($consulta = mysqli_fetch_array($resultados)){


		 ?>

		<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['USER'];?></td>
		<td><?php echo $consulta['TYPE'];?></td>
		<td><?php echo $consulta['LOCALIDAD'];?></td>
		<td><?php echo "<a href='CrudEdit.php'>Editar</a> / <a href='CrudDelete.php'>Borrar</a>"?></td>
		<td><?php } ?></td>
	</tr>
</table>


		 

	<?php
		 	}
   	


   		 		?>


<br>

<br>

	<form action="CrudSucursal.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>