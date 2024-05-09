<?php
include('conexion.php');
$conn = connection();

$IdMascota =null;
$NombrePropietario = $_POST['NombrePropietario'];
$Telefono = $_POST['Telefono'];
$NombreMascota = $_POST['NombreMascota'];
$EdadMascota = $_POST['EdadMascota'];
$RazaMascota = $_POST['RazaMascota'];
$Especie = $_POST['Especie'];
$Enfermedades = $_POST['Enfermedades'];
$Alergias = $_POST['Alergias'];
$CorreoElectronico = $_POST['CorreoElectronico'];
$Contraseña = $_POST['Contraseña'];

$insert = "call insertMascota ('$NombrePropietario', '$Telefono', '$NombreMascota ', '$sexo', '$EdadMascota', '$RazaMascota', '$Especie', '$Enfermedades', '$Alergias', '$CorreoElectronico',
'$Contraseña')";

$query =mysqli_query($conn, $insert);

if($query)
{
    Header("Location:MascotasRegistradas.php");
}
?>