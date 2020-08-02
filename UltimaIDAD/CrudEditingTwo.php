<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>


<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); ?>


<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


<?php


if (isset($_GET['editz'])) {

    $Id = $_GET['editz'];

    $resultados = mysqli_query($conexion,"SELECT * FROM registro WHERE ID = '$Id'" );
    while($consulta = mysqli_fetch_array($resultados)){
      echo "ID: ";
      echo $consulta['ID'];
      echo "<br>Nombre: ";
      echo $consulta['NOMBRE'];
      echo "<br>Edad: ";
      echo $consulta['EDAD'];
      echo "<br>Curso: ";
      echo $consulta['CURSO'];
     } } ?>

   

  
<br><br>
<b>Editing Menu</b>
<hr>
<br>

<form action="CrudEditingTwoCompleted.php?ident=<?php echo $Id ?>" method="post">
  
  NOMBRE
	<input type="text" name="nombres" placeholder="nombre a editar" >
  EDAD
  <input type="number" name="edades" placeholder="edad a editar" >
  CURSO
  <input type="text" name="cursos" placeholder="curso a editar" >
	<input type="submit" value="actualizar" name="act">
</form>

<form action="CrudMenu.php" method="post">
	<input type="submit" value="back" name="back">
</form>


</body>
</html>