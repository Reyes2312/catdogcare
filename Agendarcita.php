<?php
include('conexion.php');
$conn = connection();
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda tu Cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #87CEEB; 
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url(https://i.pinimg.com/564x/da/47/79/da4779d5004ff9b252f14788341ee202.jpg)
        }
        nav {
            background-color: #3498db; 
            padding: 10px;
            text-align: center;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        nav a {
            color: #fff; 
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            padding: 10px 15px; 
            border-radius: 5px; 
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #2c3e50; 
        }
        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
            transition: background-color 0.3s ease; 
        }
        button.agendar {
            background-color: #3498db; 
            color: #fff; 
        }
        button.cancel {
            background-color: #fff; 
            color: #f44336;
        }
        button:hover.agendar {
            background-color: #2c3e50; 
        }
        button:hover.cancel {
            background-color: #f44336; 
            color: #fff; 
        }
    </style>
</head>
<body>
    <!-- BOTONES-->
    <nav>
        <a href="perfilpaciente.php">Inicio</a>
    
    </nav>

    <form action="procesar_formulario.php" method="post">
        <h2>¡Bienvenido, agenda tu cita!</h2>


        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        
        <label for="hora">Hora:</label>
        <select id="hora" name="hora" required>
            <option value="Nombre" disabled selected>Selecciona una hora</option>
            <option value="07:00 AM">07:00 AM</option>
            <option value="09:00 AM">09:00 AM</option>
            <option value="11:00 AM">10:00 AM</option>
            <option value="01:00 PM">01:00 PM</option>
            <option value="03:00 PM">03:00 PM</option>
            <option value="05:00 PM">05:00 PM </option>
            <option value="07:00 PM">07:00 PM </option>
            <option value="09:00 PM">09:00 PM</option>
            <option value="10:00 PM">10:00 PM</option>
            <option value="11:00 PM">11:00 PM</option>
        </select>

        <label for="medico">Médico:</label>
        <select id="medico" name="medico" required>
        <option value="Nombre" disabled selected>Selecciona un medico</option>
            <option value="Dr. Smith">Dr. Smith-Cardiologia</option>
            <option value="Dra. Sanchez">Dra. Sanchez-Oncologia</option>
            <option value="Dr. Gutierrez">Dr. Gutierrez-Fisioterapia</option>
            <option value="Dr. Alonso">Dr. Alonso-Rehabilitacion </option>
            <option value="Dr. Felix">Dr. Felix-Fauna Silvestre</option>
            <option value="Dra. Miriam">Dra. Miriam-Imagenologia </option>
            <option value="Dra. Araceli">Dra. Araceli-Medico general </option>
            <option value="Dra. Salazar">Dra. Salazar-Cartologia</option>
        </select>

        <label for="motivo">Motivo de la visita:</label>
        <textarea id="motivo" name="motivo" rows="4" required></textarea>

        <button type="submit" class="agendar">Agendar Cita</button>
    </form>

    <footer>
        <p>&copy; DERECHOS RESERVADOS-CATDOGCARE</p>
    </footer>
</body>
</html>