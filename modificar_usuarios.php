<?php

include ('conexion.php');
$conn = connection();


$nombrepropietario = $_POST['NombrePropietario'];
$telefono = $_POST['Telefono'];
$nombremascota = $_POST['NombreMascota'];
$sexo = $_POST['Sexo'];
$edadmascota = $_POST['EdadMascota'];
$razamascota = $_POST['RazaMascota'];
$especie= $_POST['Especie'];
$enfermedades = $_POST['Enfermedades'];
$alergias = $_POST['Alergias'];
$correoelectronico = $_POST['CorreoElectronico'];
$contraseña = $_POST['Contraseña'];

$consultar = "call insertMascota ('$nombrepropietario', '$telefono', '$nombremascota','$sexo' '$edadmascota', '$razamascota', '$especie', '$enfermedades', '$alergias', '$correoelectronico',
'$contraseña')";


$query = mysqli_query($conn, $consultar);

if($query)
{
    Header("Location:MascotasRegistradas.php");
}