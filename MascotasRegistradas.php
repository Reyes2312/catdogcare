<?php
include('conexion.php');
$conn = connection();

$consultar ="SELECT * FROM mascota";
$result=mysqli_query($conn,$consultar);
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Mascotas Registradas</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: url('fondo.avif') center/cover no-repeat fixed;
            color: #fff;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: url('fondo.avif') center/cover no-repeat fixed; /* Reemplaza 'tu-imagen-de-fondo.jpg' con la ruta de tu imagen */
            color: #000000;
        }
        body {
    background-image: url('fondo1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

        nav {
            background-color: #1a1a1a;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            margin: 0 15px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        nav a:hover {
            background-color: #0088ff;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav a#cerrar-sesion {
            background-color: #e74c3c;
            color: #fff;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        nav a#cerrar-sesion:hover {
            background-color: #2bc037;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mascotas-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
        }

        .mascota {
            margin-bottom: 20px;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: left;
        }

        .mascota img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            border: 4px solid #fff; 
        }

        .mascota h3 {
            margin-top: 0;
            color: #fff;
        }

        .mascota p {
            color: #eee;
        }

        table td{
            border: 1px solid #fff;
    padding: 8px;
    color: white;
    border-radius: 5px;
        }

        table{
            width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: rgb(28, 118, 121);
    border-radius: 5px;
        }

        .tablita{
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
            transform: translateY(-3px); 
            margin: 10px;
        }
     
        
    </style>
</head>

<body>

    <nav>
        <div>
            <a href="PerfilMedico.php">Inicio</a>
        </div>
    </nav>


    <div class="titulo">
    <h1>Mascotas Registradas</h1>
<div class="tablita">
    <table class="tabla" borders="6" >
    <tr><thead>
        <td>IdMascota</td>
        <td>NombrePropietario</td>
        <td>Telefono</td>
        <td>Sexo</td>
        <td>NombreMascota</td>
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
      
    
    
         <td> <a href='modificar1.php?IdMascota=<?php echo $row['IdMascota'] ?>'>Modificar</a><td>
         <td><a href="eliminar.php?IdMascota=<?php echo $row['IdMascota'] ?>">Eliminar</a><td>
    </tr>
    
    <?php endwhile;?>
    
    </table>
    </div>
    </body>
</html>
