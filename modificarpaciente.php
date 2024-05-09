<?php

include('conexion.php');
$conn = connection();

$IdMascota =$_GET['IdMascota'];

$consultar = "SELECT * FROM mascota Where IdMascota = '$IdMascota'";



$query = mysqli_query($conn,$consultar);

$mostrar = mysqli_fetch_array($query);


?>

<!doctype html>
<body>
    <h1>¡Hola, aquí puedes modificar tus datos!</h1>
  <form action="perfilpaciente.php" method="POST">
     <input type="text" name="NombrePropietario" value="<?php echo $mostrar['NombrePropietario'] ?>">
     <input type="text" name="Telefono" value="<?php echo $mostrar['Telefono'] ?>">
     <input  type="text" name="NombreMascota" value="<?php echo $mostrar['NombreMascota'] ?>">
     <input  type="text" name="EdadMascota" value="<?php echo $mostrar['EdadMascota'] ?>">
     <input  type="text" name="RazaMascota" value="<?php echo $mostrar['RazaMascota'] ?>">
     <input  type="text" name="Especie" value="<?php echo $mostrar['Especie'] ?>">
     <input  type="text" name="Enfermedades" value="<?php echo $mostrar['Enfermedades'] ?>">
     <input  type="text" name="Alergias" value="<?php echo $mostrar['Alergias'] ?>">
     <input  type="text" name="CorreoElectronico" value="<?php echo $mostrar['CorreoElectronico'] ?>">
     <input  type="text" name="Contraseña" value="<?php echo $mostrar['Contraseña'] ?>">
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