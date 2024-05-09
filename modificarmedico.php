<?php

include('conexion.php');
$conn = connection();

$IdMedico =$_GET['IdMedico'];

$consultar = "SELECT * FROM medico Where IdMedico = '$IdMedico'";



$query = mysqli_query($conn,$consultar);

$mostrar = mysqli_fetch_array($query);


?>

<!doctype html>
<body>
  <form action="PerfilMedico.php" method="POST">
     <input type="text" name="NombreMedico" value="<?php echo $mostrar['NombreMedico'] ?>">
     <input type="text" name="Especialidad" value="<?php echo $mostrar['Especialidad'] ?>">
     <input type="text" name="NumTelefono" value="<?php echo $mostrar['NumTelefono'] ?>">
     <input  type="text" name="CorreoElectronico" value="<?php echo $mostrar['CorreoElectronico'] ?>">
     <input  type="text" name="Contrasena" value="<?php echo $mostrar['Contrasena'] ?>">
     <input  type="text" name="HorarioDetrabajo" value="<?php echo $mostrar['HorarioDetrabajo'] ?>">
     <input  type="text" name="direccion" value="<?php echo $mostrar['direccion'] ?>">
     <input  type="text" name="Experiencia" value="<?php echo $mostrar['Experiencia'] ?>">
    <input type="submit" value="modificar">
</form>
</body>
<style>

body {
    background-image: url('fondo1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}
form {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: rgb(28, 118, 121);
    border-radius: 5px;
}
input,
input {
    border: 1px solid #fff;
    padding: 8px;
    color: white;
    border-radius: 5px;
}

input {
    background-color: #339191;
    border-radius: 5px;
}

    </style>
    </html>