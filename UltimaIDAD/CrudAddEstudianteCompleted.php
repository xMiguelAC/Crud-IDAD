<?php    #Header or Navbar
    include('Top.php'); ?>


<?php 
if (isset($_GET['add'])) {

    $Local3 = $_GET['add'];

     } ?>


Add to Sucursal completed
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into estudiantes
	(LOCAL) 
	values ('$_REQUEST[$Local3]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<h2>Perfecto.</h2>";
echo " <h3>Se ha registrado en $Local3.</h3>";
  ?>

<form action="CrudMenu.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>