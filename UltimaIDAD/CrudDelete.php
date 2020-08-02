<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


Delete Menu
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

if (isset($_GET['delete'])) {

   /* $Name = $_POST['nombres'];*/
    $Id = $_GET['delete'];


    $resultados = mysqli_query($conexion,"SELECT * FROM registro WHERE ID = '$Id'" );

    $_DELETE_SQL =  "DELETE FROM registro WHERE ID = '$Id'";
  			mysqli_query($conexion,$_DELETE_SQL); 
  			echo "<h2>Registro eliminado con exito.</h2>"; }

  ?>

<form action="CrudMenu.php" method="post">
  <input type="submit" value="back" name="back">
</form> 

</body>
</html>













