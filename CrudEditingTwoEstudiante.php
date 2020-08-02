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


<?php


if (isset($_GET['edit'])) {

    $Id = $_GET['edit'];

    $resultados = mysqli_query($conexion,"SELECT * FROM estudiantes WHERE ID = '$Id'" );
    while($consulta = mysqli_fetch_array($resultados)){
      echo "<b>ID:</b> ";
      echo $consulta['ID'];
      echo "<br><b>Nombre</b>: ";
      echo $consulta['NOMBRE'];
      echo "<br><b>Apellido:</b>: ";
      echo $consulta['APELLIDO'];
      echo "<br><b>Correo</b>: ";
      echo $consulta['CORREO'];
      echo "<br><b>Whatsapp</b>: ";
      echo $consulta['WHATSAPP'];
      echo "<br><b>Fecha</b>: ";
      echo $consulta['FECHA'];
      echo "<br><b>Curso:</b> ";
      echo $consulta['CURSO'];
      echo "<br><b>Modalidad de Pago:</b> ";
      echo $consulta['MODALIDADPAGO'];
      echo "<br><b>Estado:</b> ";
      echo $consulta['ESTADO'];
      echo "<br><b>Comprobante:</b> ";
      echo $consulta['COMPROBANTE'];
      echo "<br><b>Oferta:</b> ";
      echo $consulta['OFERTA'];
      echo "<br><b>Abono:</b> ";
      echo $consulta['ABONO'];
      echo "<br><b>Observacion:</b> ";
      echo $consulta['OBSERVACION'];
     } } ?>

   

  
<br><br>
<b>Editing Menu</b>
<hr>
<br>


<form action="CrudEditingTwoEstudianteCompleted.php?editest=<?php echo $Id ?>" method="post">
  <?php 

    $Id = $_GET['edit']; 

    $resultados = mysqli_query($conexion,"SELECT * FROM estudiantes WHERE ID = '$Id'" );
      while($consulta = mysqli_fetch_array($resultados)){

  ?>

  Nombre:
  <input type="text" name="name" value="<?php echo $consulta['NOMBRE'];?>"><br>
  Apellido:
  <input type="text" name="last" value="<?php echo $consulta['APELLIDO'];?>"><br>
  Correo:
  <input type="email" name="email" value="<?php echo $consulta['CORREO'];?>"><br>
  Whatsapp:
  <input type = "text" name = "celular" placeholder = "Ej: 809-123-1234."  pattern="[8]{1}[0-9]{2}-[0-9]{3}-[0-9]{4}" value="<?php echo $consulta['WHATSAPP'];?>"><br>
  Fecha:
  <input type="date" name="date" value="<?php echo $consulta['FECHA'];?>"><br>
  Curso:
    <select name="course" value="<?php echo $consulta['CURSO'];?>">
      <option value="Diseno">Diseno</option>
      <option value="Redes">Redes</option>
    </select><br>
    Modalidad pago:
  <select name="payment" value="<?php echo $consulta['MODALIDADPAGO'];?>">
      <option value="Tarjeta">Tarjeta</option>
      <option value="Efectivo">Efectivo</option>
      <option value="Transaction">Transaccion</option>
      <option value="Otro">Otro...</option>
    </select><br>
    Estado de Estudiante:
  <select name="state" value="<?php echo $consulta['ESTADO'];?>">
      <option value="Pendiente">Pendiente</option>
      <option value="Inscrito">Inscrito</option>
    </select><br>
  Comprobante:
  <input type="file" name="voucher" value="<?php echo $consulta['COMPROBANTE'];?>" multiple><br>
  <!--Matricula:
  <input type="text" name="enrollment"><br>-->
  Oferta:
  <select name="offer" value="<?php echo $consulta['OFERTA'];?>">
      <option value="Ninguna Oferta">Ninguna Oferta.</option>
      <option value="10 Porciento Descuento">10 porciento descuento</option>
      <option value="20 Porciento Descuento">20 porciento descuento</option>
    </select><br>
    Abono Estudiante:
  <input type="text" name="invoicePayment" value="<?php echo $consulta['ABONO'];?>"><br>
  Observacion:
  <input type="text" name="observation" value="<?php echo $consulta['OBSERVACION'];?>"><br><br>
  <?php } ?>
  <input type="submit" value="Actualizar" name="actu">
</form>

<form action="CrudMenu.php" method="post">
	<input type="submit" value="back" name="back">
</form>


</body>
</html>