<?php    #Header or Navbar
    include('Top.php'); ?>


Inscripcion Estudiante
<hr>
<br>

<form action="CrudAddInscripcionEstudianteCompleted.php" method="post" enctype="multipart/form-data">
	Nombre:
	<input type="text" name="name"><br>
	Apellido:
	<input type="text" name="last"><br>
	Correo:
	<input type="email" name="email"><br>
	Whatsapp:
	<input type = "text" name = "celular" placeholder = "Ej: 8x9-123-1234."  pattern="[8]{1}[0-9]{2}-[0-9]{3}-[0-9]{4}"><br>
	Fecha:
	<input type="date" name="date"><br>
	Curso:
    <select name="course">
		  <option value="Diseno">Diseno</option>
		  <option value="Redes">Redes</option>
		</select><br>
		Modalidad pago:
	<select name="payment">
		  <option value="Tarjeta">Tarjeta</option>
		  <option value="Efectivo">Efectivo</option>
		  <option value="Transaccion">Transaccion</option>
		  <option value="Otro">Otro...</option>
		</select><br>
		Estado de Estudiante:
	<select name="state">
		  <option value="Pendiente">Pendiente</option>
		  <option value="Inscrito">Inscrito</option>
		</select><br>
	Comprobante:
	<input type="file" name="voucher" accept="image/jpeg, image/png"><br>
	<!--Matricula:
	<input type="text" name="enrollment"><br>-->
	Oferta:
	<select name="offer">
		  <option value="Ninguna Oferta">Ninguna Oferta.</option>
		  <option value="10 Porciento Descuento">10 porciento descuento</option>
		  <option value="20 Porciento Descuento">20 porciento descuento</option>
		</select><br>
		Abono Estudiante:
	<input type="text" name="invoicePayment"><br>
	Observacion:
	<input type="text" name="observation"><br><br>
	<input type="submit" value="Inscribir" name="">
</form>


<form action="CrudMenu.php" method="post">
	<input type="submit" value="back" name="back">
</form>

</body>
</html>