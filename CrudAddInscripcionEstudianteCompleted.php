<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>

<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>


Inscripcion Estudiante Completed
<hr>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into estudiantes
	(NOMBRE,APELLIDO,CORREO,WHATSAPP,FECHA,CURSO,MODALIDADPAGO,ESTADO,COMPROBANTE,OFERTA,ABONO,OBSERVACION) 
	values ('$_REQUEST[name]','$_REQUEST[last]','$_REQUEST[email]','$_REQUEST[celular]','$_REQUEST[date]','$_REQUEST[course]','$_REQUEST[payment]','$_REQUEST[state]','$_REQUEST[voucher]','$_REQUEST[offer]','$_REQUEST[invoicePayment]','$_REQUEST[observation]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "<h2>Perfecto.</h2>";

$Name=$_POST['name'];
$Last=$_POST['last'];
$Email=$_POST['email'];
$Celular=$_POST['celular'];
$Date=$_POST['date'];
$Course=$_POST['course'];
$Payment=$_POST['payment'];
$State=$_POST['state'];
$Voucher=$_POST['voucher'];
$Offer=$_POST['offer'];
$InvoicePayment=$_POST['invoicePayment'];
$Observation=$_POST['observation'];


echo " Se ha registrado correctamente el Usuario: <b>$Name $Last,</b> para el Curso: <b>$Course.</b>";
echo "<br> Sus datos son: Correo: <b>$Email,</b> Telefono: <b>$Celular,</b> Fecha: <b>$Date.</b>";
echo "<br> Pago de esta manera: <b>$Payment,</b> se encuentra: <b>$State.</b>";
echo " Tiene la oferta de: <b>$Offer</b>, <br>Abono: <b>$InvoicePayment,</b> Nota: <b>$Observation.</b>";

  ?>

<form action="CrudMenu.php">
	<input type="submit" value="back" name="">
</form>

</body>
</html>