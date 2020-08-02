<?php    #Header or Navbar
    include('Top.php'); ?>

Add menu
<hr>
<br>

<form action="CrudAddCompleted.php" method="post">
	Nombre:
	<input type="text" name="name">
	Edad:
	<input type="number" name="age">
	Curso:
	<input type="text" name="course">
	<input type="submit" value="enviar" name="">
</form>

<br>

<form action="CrudMenu.php" method="post">
	<input type="submit" value="back" name="back">
</form>

</body>
</html>