<?php

include ('conexion.php');
$con = connection();

$IdCitas =null;
$Fecha = $_POST['Fecha'];
$Hora = $_POST['Hora'];
$IdMascota = $_POST['IdMascota'];
$IdMedico= $_POST['IdMedico'];
$FechaDeCancelacion= $_POST['FechaDeCancelacion'];


$consultar = "call insertMascota ('$NombrePropietario', '$Telefono', '$NombreMascota ', '$EdadMascota', '$RazaMascota', '$Especie', '$Enfermedades', '$Alergias', '$CorreoElectronico',
'$Contraseña')";


$query = mysqli_query($con, $consultar);

if($query)
{
    Header("Location:CitasAgendadas.php");
}