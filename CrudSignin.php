<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

	<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); 

    $NewUser="";
    $NewPass="";

    ?>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>

	<center><h2>Sign-Up</h2></center>

	<center><form action="CrudSigninCompleted.php" method="post">
		New User:
		<input type="text" name="NewUser">
		Password:
		<input type="password" name="NewPass">
		Tipo:
		<select name="Type">
			<option value="Admin">Admin</option>
			<option value="Secretario">Secretario</option>
			<option value="Usuario">Usuario</option>	
		</select>
		<input type="submit" value="Crear" name="NewLog">
	</form></center>



<br>
<center><a href="index.php">Log in</a></center>

</body>
</html>