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


Sign Up Completed
<hr>
<br>

<?php
	/*$mensaje='';

 if (!empty($_POST['NewUser']) && !empty($_POST['NewPass'])) {
 	$sql = "INSERT INTO users (USER, PASSWORD) VALUES (:NewUser, :NewPass)";
 	$stmt = $conn->prepare($sql);
 	$stmt->bindParam(':NewUser',$_POST['NewUser']);
 	$password = password_hash($_POST['NewPass'], PASSWORD_CRYPT);
 	$stmt->bindParam(':NewPass',$password);

 	if ($stmt->execute()) {
 	 	$mensaje='funciona.';
 	 } else {
 	 	$mensaje='se jodio.';
 	 } 
 }*/


mysqli_query($conexion,"insert into users
	(USER,PASSWORD, TYPE) 
	values ('$_REQUEST[NewUser]','$_REQUEST[NewPass]','$_REQUEST[Type]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<center><h2>Perfecto.</h2><c/enter>";

$NameUser=$_POST['NewUser'];


echo " <h3>Se ha creado correctamente el Usuario: $NameUser</h3>";
  

    ?>

<form action="index.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>