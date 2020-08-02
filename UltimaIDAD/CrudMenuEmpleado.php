<?php    #Header or Navbar
    include('Top.php'); ?>

		<?php  #LOG ONLY Empleados
			include('CrudEmpleadoLog.php');  ?>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>



Menu General
<hr>
<br>

<form action="CrudMenu.php" method="post">
		<input type="submit" value="Estudiantes" name="student">
	</form>
<br>
<br>

	<form action="index.php?cerrar_sesion=1" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>