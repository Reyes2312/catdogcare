<?php
include('conexion.php');
$conn = connection();
session_start();
$IdMascota = $_SESSION['IdMascota'];
$consultar= "SELECT * FROM mascota where IdMascota = '$IdMascota'";
$result=mysqli_query($conn,$consultar);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>Perfil del Paciente</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       body {
            font-family: 'open sans'; /* Tipo de letra para todo el cuerpo de la página */
            margin: 0;
            padding: 0;
            background-color: #79bae6;
        }
        nav {
            background-color: #6390b9;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between; 
            transform: translateY(-3px); 
            align-items: center; 
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            margin: 0 10px;
            transform: translateY(-3px); 
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; 
        }

        nav a:hover {
            background-color: #243544;
            color: #fff;
            border: 1px solid #000000;
            transform: translateY(-3px); 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        nav a#cerrar-sesion {
            background-color: #e74c3c;
            color: #fff;
            border-radius: 20px;
            padding: 10px 15px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; 
        }

        nav a#cerrar-sesion:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .titulo,
        .contenido-textos {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
            transform: translateY(-3px); 
            margin: 10px;
        }

        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: rgb(28, 118, 121);
    border-radius: 5px;
}

table th,
table td {
    border: 1px solid #fff;
    padding: 8px;
    color: white;
    border-radius: 5px;
}

table th {
    background-color: #339191;
    border-radius: 5px;
}

body {
    background-image: url('fondo1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}



button#btnModificarPerfil {
    background-color: #4CAF50; 
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; 
}

button#btnModificarPerfil:hover {
    background-color: rgb(26, 54, 104); 
    transform: scale(1.05); 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}


    </style>
</head>

<body>

    <nav>
        <div>
            <a href="perfilpaciente.php">Inicio</a>
            <a href="Agendarcita.php">Agendar cita</a>
        </div>
        <a id="cerrar-sesion" href="cerrarsesionpaciente.php">Cerrar Sesión</a>
        
    </nav>

  <!-- Resto del contenido -->

<div class="titulo">
    <h2>Información del Propietario y la Mascota</h2>
</div>


</div>
<div class="tablita">
    <table class="table" >
    <tr><thead>
        <td>IdMascota</td>
        <td>NombrePropietario</td>
        <td>Telefono</td>
        <td>NombreMascota</td>
        <td>Sexo</td>
        <td>EdadMascota</td>
        <td>RazaMascota</td>
        <td>Especie</td>
        <td>Enfermedades</td>
        <td>Alergias</td>
        <td>CorreoElectronico</td>
        <td>Contraseña</td>

<td></td>
<td></td>
<thead>
</tr>
<?php

while($row=mysqli_fetch_array($result)):?>
<tr>
    <td><?php echo $row['IdMascota'] ?></td>
     <td><?php echo $row['NombrePropietario'] ?></td>
     <td><?php echo $row['Telefono'] ?></td>
     <td><?php echo $row['NombreMascota'] ?></td>
     <td><?php echo $row['Sexo'] ?></td>
     <td><?php echo $row['EdadMascota'] ?></td>
     <td><?php echo $row['RazaMascota'] ?></td>
     <td><?php echo $row['Especie'] ?></td>
     <td><?php echo $row['Enfermedades'] ?></td>
     <td><?php echo $row['Alergias'] ?></td>
     <td><?php echo $row['CorreoElectronico'] ?></td>
     <td><?php echo $row['Contraseña'] ?></td>



     <td> <a href='modificarpaciente.php?IdMascota=<?php echo $row['IdMascota'] ?>'>Modificar</a><td>
     
</tr>
<?php endwhile;?>
<!-- Resto del contenido -->

<?php
echo $_SESSION["IdMascota"];
?>

</body>

</html>
