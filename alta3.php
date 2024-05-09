<?php
include('conexion.php');
$conn = connection();


$IdCitas =null;
$Fecha = $_POST['Fecha'];
$Hora = $_POST['Hora'];
$IdMascota = $_POST['IdMascota'];
$IdMedico= $_POST['IdMedico'];
$FechaDeCancelacion= $_POST['FechaDeCancelacion'];


$insert = "call insertMascota ('$NombrePropietario', '$Telefono', '$NombreMascota ', '$sexo', '$EdadMascota', '$RazaMascota', '$Especie', '$Enfermedades', '$Alergias', '$CorreoElectronico',
'$Contraseña')";

$query =mysqli_query($conn, $insert);

if($query)
{
    Header("Location:MascotasRegistradas.php");
}
?>