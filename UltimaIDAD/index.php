<?php

    #Header or Navbar
    include('Top.php');

    session_start();

    if (isset($_GET['cerrar_sesion'])) {
    	session_unset();
    	session_destroy();
    }

    if (isset($_SESSION['rol'])) {
    	switch ($_SESSION['rol']) {
    		case 1:
    		header('location: CrudAdmin.php');
    			break;
    		
    		case 2:
    		header('location: CrudUser.php');
    			break; 

            case 3:
            header('location: CrudEmpleado.php');
                break; 

    		default:
    	}
    }

    if (isset($_POST['user']) && isset($_POST['pass'])) {
    	$uname = $_POST['user'];
    	$upass = $_POST['pass'];

    	$db = new Database();
    	$query = $db->connect()->prepare('SELECT * FROM users WHERE user = :uname AND password = :upass');

    	$query->execute(['uname' => $uname, 'upass' => $upass]);

    	$row = $query->fetch(PDO::FETCH_NUM);
    	if ($row == true) {

    		$rol = $row[3];
    		$_SESSION['rol']=$rol;

    		switch ($_SESSION['rol']) {
    		case 1:
    		header('location: CrudAdmin.php');
    			break;
    		
    		case 2:
    		header('location: CrudUser.php');
    			break; 

    		default:
    	}

    		echo "<center>usuario correcto</center>";
    	}else{
    		echo "<center>usuario incorrecto</center>";
    	}
    }



    ?>


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
		

/*if (isset($_POST['validar'])) {

	$userx=$_POST['user'];
	$passx=$_POST['pass'];

	if (!empty($_POST['user']) && !empty($_POST['pass'])) {
		$resultados = mysqli_query($conexion,"SELECT * FROM users WHERE USER = '$userx' AND PASSWORD = '$passx' ");
		  while($consulta = mysqli_fetch_array($resultados))
		  {
		    $ValidName=$consulta['USER'];
		    $ValidPass=$consulta['PASSWORD'];
		    $ValidType=$consulta['TYPE'];

		    echo "<center>Bienvenido: </center>";
		    echo "<center><b>$ValidName! </b></center><br>";
		    echo"<center><a href='CrudMenuGeneral.php'><b>Click aqui para iniciar</b></a></center>";
		  }

	} else { echo "<center><h2>Por favor, llene los formularios.</h2></center>"; }
	 
	
}
	
*/
?>
</body>
</html>