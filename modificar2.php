<?php

include('conexion.php');
$conn = connection();

$IdMascota =$_GET['IdCitas'];

$consultar = "SELECT * FROM Citas Where IdCitas  = '$IdCitas '";



$query = mysqli_query($conn,$consultar);

$mostrar = mysqli_fetch_array($query);


?>

<!doctype html>
<body>
  <form action="modificarcitas.php" method="POST">
     <input type="text" name="Idcita" value="<?php echo $mostrar['IdCitas'] ?>">
     <input type="text" name="Fecha" value="<?php echo $mostrar['Fecha'] ?>">
     <input  type="text" name="Hora" value="<?php echo $mostrar['Hora'] ?>">
     <input  type="text" name="IdMascota" value="<?php echo $mostrar['IdMascota'] ?>">
     <input  type="text" name="IdMedico" value="<?php echo $mostrar['IdMedico'] ?>">
     <input  type="text" name="FechaDeCancelacion" value="<?php echo $mostrar['FechaDeCancelacion'] ?>">

    <input type="submit" value="modificar">
</form>
</body>