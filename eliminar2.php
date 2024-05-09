<?php

include('conexion.php');
$conn = connection();

$IdMascota=$_GET['$IdCitas'];

$consultar = "call deleteCitas ('$IdCitas')";

$query = mysqli_query($conn, $consultar);

if($query)
{
    Header("Location: CitasAgendadas.php");
}

?>