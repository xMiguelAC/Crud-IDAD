
    <?php  #LOG ONLY ADMIN
      include('CrudAdminLog.php');
      include('Top.php');  ?>



Delete Sucursal
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

if (isset($_GET['sucursal'])) {

   /* $Name = $_POST['nombres'];*/
    $Id = $_GET['sucursal'];


    $resultados = mysqli_query($conexion,"SELECT * FROM sucursales WHERE ID = '$Id'" );

    $_DELETE_SQL =  "DELETE FROM sucursales WHERE ID = '$Id'";
  			mysqli_query($conexion,$_DELETE_SQL); 
  			echo "<center><h2>Registro eliminado con exito.</h2>"; }

  ?>

<form action="CrudAddSucursal.php" method="post">
  <input type="submit" value="back" name="back">
</form> 

</body>
</html>













