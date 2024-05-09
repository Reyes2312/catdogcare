<?php
include('conexion.php');
$conn = connection();

$consultar ="SELECT * FROM citas";
$result=mysqli_query($conn,$consultar);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Citas Agendadas</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            background: url('fondo1.jpg') center/cover no-repeat fixed; 
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


        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: url('fondo1.jpg') center/cover no-repeat fixed; 
            color: #000000;
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

        .perfil {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
        }

        .perfil img {
            border-radius: 50%;
            max-width: 150px;
            margin-bottom: 20px;
        }

        .contenido-textos {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
        }

        .citas-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
        }

        .cita {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: left;
        }

        .cita h3 {
            margin-top: 0;
            color: #333;
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8); 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin: 20px auto;
            max-width: 800px;
        }

        .tabla th,
        .tabla td {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .tabla th {
            background-color: #f9f9f9;
            color: #333;
        }

        .tabla td a {
            text-decoration: none;
            color: #0088ff;
        }

        .tabla td a:hover {
            text-decoration: underline;
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
    <h1>Citas Agendadas</h1>
<div class="tablita">
    <table class="tabla" borders="6" >
    <tr><thead>
        <td>IdCitas</td>
        <td>Fecha</td>
        <td>Hora</td>
        <td>IdMascota</td>
        <td>IdMedico</td>
        <td>FechaDeCancelacion</td>
     

<td></td>
<td></td>
<thead>
</tr>
<?php
while($row=mysqli_fetch_array($result)):?>
    <tr>
        <td><?php echo $row['IdCitas'] ?></td>
         <td><?php echo $row['Fecha'] ?></td>
         <td><?php echo $row['Hora'] ?></td>
         <td><?php echo $row['IdMascota'] ?></td>
         <td><?php echo $row['IdMedico'] ?></td>
         <td><?php echo $row['FechaDeCancelacion'] ?></td>
       
      
    
    
         <td> <a href='modificar2.php?IdMascota=<?php echo $row['IdCitas'] ?>'>Modificar</a><td>
         <td><a href="eliminar2.php?IdMascota=<?php echo $row['IdCitas'] ?>">Eliminar</a><td>
    </tr>
    
    <?php endwhile;?>
    
    </table>
    </div>
    </body>



</html>
