		<?php  #LOG ONLY ADMIN
			include('Top.php');
			include('CrudAdminLog.php');  ?>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>

<?php 

	ob_start();

	if (isset($_GET['sucursal'])) {

   	 $_SESSION['IDLocal'] = $_GET['sucursal'];

     } ?>


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
				<th>Sucursal</th>
				<th>Agregar</th>
			</tr>";

		$resultados = mysqli_query($conexion,"SELECT * FROM users WHERE USER like '%$NameEST%' ");
		while($consulta = mysqli_fetch_array($resultados)){


		 ?>

		<tr>
		<td><?php echo $consulta['ID'];?></td>
		<td><?php echo $consulta['USER'];?></td>
		<td><?php echo $consulta['PASSWORD'];?></td>
		<td><?php echo $consulta['TYPE'];?></td>
		<td><?php echo $consulta['LOCALIDAD'];?></td>
		<td><form action="CrudSucursalAdding.php?edit=<?php echo $consulta['ID']; ?>"method="post"><input type="submit" name="editar" value="+"></form></td>
		<td><?php } ?></td>
	</tr>
</table>


		 

	<?php
		 	}
   	


   		 		?>


<br>

</body>
</html>