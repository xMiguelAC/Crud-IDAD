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
	<center><h1>Instituto Dominicano de Arte y Diseno</h1></center>
</div>

		<center><h2>Login</h2></center>
	
	<center>
	<form action="index.php" method="post">
		Ususario:
		<input type="text" name="user">
		Contraseña:
		<input type="password" name="pass">
		<br><br>
		<input type="submit" name="validar">
	</form>
	</center>

<br>

<center><a href="CrudSignin.php">No tienes una cuenta? Crea una.</a></center>

<br><br>

<?php 
		

if (isset($_POST['validar'])) {

	$userx=$_POST['user'];
	$passx=$_POST['pass'];

	if (!empty($_POST['user']) && !empty($_POST['pass'])) {
		$resultados = mysqli_query($conexion,"SELECT * FROM users WHERE USER = '$userx' AND PASSWORD = '$passx' ");
		  while($consulta = mysqli_fetch_array($resultados))
		  {
		    $ValidName=$consulta['USER'];
		    $ValidPass=$consulta['PASSWORD'];

		    echo "<center>Bienvenido: </center>";
		    echo "<center>$ValidName! </center><br>";
		    echo"<center><a href='CrudMenuGeneral.php'><b>Click aqui para iniciar</b></a></center>";
		  }

	} else { echo "<center><h2>Por favor, llene los formularios.</h2></center>"; }
	 
	
}
	

?>
</body>
</html>