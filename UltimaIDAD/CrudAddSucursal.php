	<?php  #LOG ONLY ADMIN
			include('Top.php');
			include('CrudAdminLog.php');  ?>
			
	<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>


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
			<th>Borrar</th>
		</tr>
	</thead>
	<?php $resultados = mysqli_query($conexion,"SELECT * FROM sucursales");
while($consulta = mysqli_fetch_array($resultados)){  ?>
	<tr>
		<td><?php echo $consulta['id'];?></td>
		<td><?php echo $consulta['local'];?></td>
		<td><a name="send" method="post" style="text-decoration:none" href="CrudMenuUser.php?sucursal=<?php echo $consulta['ID']; ?>">Agregar Persona</a></td>
		<td><a name="delete" method="post" style="text-decoration:none" href="CrudDeleteSucursal.php?sucursal=<?php echo $consulta['ID']; ?>">/ Borrar</a></td>
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