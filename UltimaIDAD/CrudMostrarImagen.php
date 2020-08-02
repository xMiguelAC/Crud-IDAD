  <?php 

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

if (isset($_GET['ver'])) {

    $Id = $_GET['ver'];


    $resultados = mysqli_query($conexion,"SELECT COMPROBANTE FROM estudiantes WHERE ID = '$Id' " );
    while($consulta = mysqli_fetch_array($resultados)){  	?>


    	<img src="data:image/jpg;base64,<?php echo base64_encode($consulta['COMPROBANTE']);  ?>" /> <?php
  

    }
}

    	?>	


<form action="CrudMenu.php" method="post">
		<input type="submit" value="Back" name="Log-Out">