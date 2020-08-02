	<?php  #LOG ONLY ADMIN
			include('CrudAdminLog.php');
			include('Top.php');  ?>
<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>


Sucursal
<hr>

<form action="CrudAddSucursal.PHP">
	<input type="submit" name="sucursal" value="Crear Sucursal">
</form>

 <form action="CrudSeeUser.php" method="post">
	<input type="submit" name="see" value="Ver Usuario">
</form> 



<br>


<br>


	<form action="CrudMenuGeneral.php" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>