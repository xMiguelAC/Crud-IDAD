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
  

Editing Menu
<hr>
<br>

<?php 

if (isset($_GET['ident'])) {

    $Id = $_GET['ident'];}


  if (isset($_POST['act'])) {

    $Nombre1=$_POST['nombres'];
    $Edad1=$_POST['edades'];
    $Curso1=$_POST['cursos'];


    $_UPDATE_SQL="UPDATE registro Set 
    NOMBRE='$Nombre1', 
    EDAD='$Edad1',
    CURSO='$Curso1'

    WHERE ID='$Id'"; 

    mysqli_query($conexion,$_UPDATE_SQL); 

    echo"<center><h2>Se ha actualizado correctamente!</h2>";
  }


?>

<form action="CrudMenu.php" method="post">
  <input type="submit" value="back" name="back">
</form>

</body>
</html>