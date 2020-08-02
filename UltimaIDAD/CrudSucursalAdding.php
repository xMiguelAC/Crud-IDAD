<?php
    #Header or Navbar
    include('Top.php');
    include('CrudAdminLog.php'); 

    

        ?>


Adding Sucursal
<hr>
<br>

<?php

if (isset($_GET['edit'])) {

    $Id = $_GET['edit']; }


$_UPDATE_SQL="UPDATE users Set

    LOCALIDAD='$_SESSION[IDLocal]'

    WHERE ID='$Id'"; 

    mysqli_query($conexion,$_UPDATE_SQL);

echo "<center><h2>Perfecto.</h2>";


echo " Se ha agregado la sucursal correctamente.";

  ?><br>

<form action="CrudSucursal.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>