<?php    #Header or Navbar
    include('Top.php'); ?>

	<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); 

    $NewUser="";
    $NewPass="";

    ?>

	<center><h2>Sign-Up</h2></center>

	<center><form action="CrudSigninCompleted.php" method="post">
		New User:
		<input type="text" name="NewUser">
		Password:
		<input type="password" name="NewPass">
		Tipo:
		<select name="Type">
			<option value="1">Admin</option>
			<option value="2">Usuario</option>	
		</select>
		<input type="submit" value="Crear" name="NewLog">
	</form></center>



<br>
<center><a href="index.php">Log in</a></center>

</body>
</html>