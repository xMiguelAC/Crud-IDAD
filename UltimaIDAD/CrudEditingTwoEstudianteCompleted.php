<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CrudIndexStyle.css">
	<title>CRUD</title>
</head>
<body>
    <?php  #LOG ONLY ADMIN
            include('CrudAdminLog.php');  ?>

<?php

$conexion=mysqli_connect("localhost","root","","idad") or
    die("Problemas con la conexión"); 

    ?>


<div class="navbar">
	<h1>Instituto Dominicano de Arte y Diseno</h1>
</div>
  

Editing Menu
<hr>
<br>

<?php 

if (isset($_GET['editest'])) {

    $Id = $_GET['editest'];
    $vooucher = addslashes(file_get_contents($_FILES['voucher']['tmp_name']));

    }


  if (isset($_POST['actu'])) {

    $Nombre1=$_POST['name'];
    $Apellido1=$_POST['last'];
    $Email1=$_POST['email'];
    $Whatsapp1=$_POST['celular'];
    $Fecha1=$_POST['date'];
    $Curso1=$_POST['course'];
    $Pago1=$_POST['payment'];
    $Estado1=$_POST['state'];
    #$Comprobante1=$_POST['voucher'];
    $vooucher = addslashes(file_get_contents($_FILES['voucher']['tmp_name']));
    $Oferta1=$_POST['offer'];
    $Abono1=$_POST['invoicePayment'];
    $Observacion1=$_POST['observation'];


    $_UPDATE_SQL="UPDATE estudiantes Set 
    NOMBRE='$Nombre1', 
    APELLIDO='$Apellido1',
    CORREO='$Email1', 
    WHATSAPP='$Whatsapp1',
    FECHA='$Fecha1', 
    CURSO='$Curso1',
    MODALIDADPAGO='$Pago1', 
    ESTADO='$Estado1',
    COMPROBANTE='$vooucher', 
    OFERTA='$Oferta1',
    ABONO='$Abono1', 
    OBSERVACION='$Observacion1'

    WHERE ID='$Id'"; 

    mysqli_query($conexion,$_UPDATE_SQL); 

    echo"<center><h2>Se ha actualizado correctamente!</h2>";
  }


?>

<form action="CrudMenu.php" method="post">
  <input type="submit" value="back" name="back">
</form>

</body>
</html>