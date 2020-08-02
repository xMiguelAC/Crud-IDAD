<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

<?php

	session_start();

	if (!isset($_SESSION['rol'])) {
		header('location: index.php');
	} else {
		if ($_SESSION['rol'] != 2){
			header('location: index.php');
		}
	}

	?>



<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


<b>Entraste como User.</b> Aqui tienes el horario de los cursos:
<hr>
<br>
<form action="#.php" method="post">
	Buscar Curso:
	<input type="text" name="NameEstudiante" placeholder="Fulano">
	<!-- Curso:
    <select name="course">
		  <option value="Diseno">Diseno</option>
		  <option value="Redes">Redes</option>
		</select> -->
		

	<input type="submit" name="search" value="Buscar">
</form>


<br>
<table class="egt">

  <tr>

    <th scope="row">Cursos</th>

    <th>Lunes</th>

    <th>Martes</th>

    <th>Miércoles</th>

    <th>Jueves</th>

    <th>Viernes</th>

    <th>Sabado</th>

    <th>Domingo</th>

  </tr>

  <tr>

    <th>Maquillaje</th>

    <td>✓</td>

    <td>X</td>

    <td>✓</td>

    <td>X</td>

    <td>✓</td>

    <td>X</td>

    <td>X</td>

  </tr>

  <tr>

    <th>Diseno de unas</th>

    <td>✓</td>

    <td>✓</td>

    <td>✓</td>

    <td>✓</td>

    <td>✓</td>

    <td>✓</td>

    <td>✓</td>

  </tr>

  <tr>

    <th>Publicidad</th>

    <td>X</td>

    <td>X</td>

    <td>X</td>

    <td>X</td>

    <td>X</td>

    <td>✓</td>

    <td>✓</td>

  </tr>

</table>

<br>

	<form action="index.php?cerrar_sesion=1" method="post">
		<input type="submit" value="Back" name="Log-Out">
	</form>


</body>
</html>