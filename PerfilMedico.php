
<?php
include('conexion.php');
$conn = connection();
session_start();
$idmedico = $_SESSION['IdMedico'];
$consultar ="SELECT * from medico where IdMedico = '$idmedico'";
$result=mysqli_query($conn,$consultar);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>Perfil del Veterinario</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'open sans';
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
            background-color: #0088ff;
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
            background-color: #2bc037;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .perfil {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
            transform: translateY(-3px);
            margin: 10px;
            text-align: center;
        }

        .perfil img {
            border-radius: 50%;
            max-width: 150px;
            margin-bottom: 20px;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: rgb(28, 118, 121);
    border-radius: 5px;
}

.titulo {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
            transform: translateY(-3px); 
            margin: 10px;
        }

        table td {
    border: 1px solid #fff;
    padding: 8px;
    color: white;
    border-radius: 5px;
}

body {
    background-image: url('fondo1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}


    </style>
</head>

<body>

    <nav>
        <div>
            <a href="PerfilMedico.php">Inicio</a>
            <a href="CitasAgendadas.php">Citas Agendadas</a>
            <a href="MascotasRegistradas.php">Mascotas registradas</a>
        </div>
        <a id="cerrar-sesion" href="cerrarsesionmedico.php">Cerrar Sesión</a>
    </nav>

</body>


 <div class="titulo">
    <h2>Perfil del médico</h2>
</div>
<div class="contenido-textos">
    <table class="table" >
    <tr><thead>
        <td>IdMedico</td>
        <td>NombreMedico</td>
        <td>Especialidad</td>
        <td>NumTelefono</td>
        <td>CorreoElectronico</td>
        <td>Contrasena</td>
        <td>HorarioDetrabajo</td>
        <td>direccion</td>
        <td>Experiencia</td>

<td></td>
<td></td>
<thead>
</tr>
<?php

while($row=mysqli_fetch_array($result)):?>
<tr>
    <td><?php echo $row['IdMedico'] ?></td>
     <td><?php echo $row['NombreMedico'] ?></td>
     <td><?php echo $row['Especialidad'] ?></td>
     <td><?php echo $row['NumTelefono'] ?></td>
     <td><?php echo $row['CorreoElectronico'] ?></td>
     <td><?php echo $row['Contrasena'] ?></td>
     <td><?php echo $row['HorarioDetrabajo'] ?></td>
     <td><?php echo $row['direccion'] ?></td>
     <td><?php echo $row['Experiencia'] ?></td>




     <td> <a href='modificarmedico.php?IdMedico=<?php echo $row['IdMedico'] ?>'>Modificar</a><td>
</tr>

<?php endwhile;?>
<?php
echo $_SESSION["IdMedico"];
?>

</html>
