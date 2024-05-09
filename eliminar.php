<?php

include('conexion.php');
$conn = connection();

$IdMascota=$_GET['$IdMascota'];

$consultar = "call deleteMascota ('$IdMascota')";

$query = mysqli_query($conn, $consultar);

if($query)
{
    Header("Location: MascotasRegistradas.php");
}

?>