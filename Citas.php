<?php
function connection(){
    $host = "localhost"; 
    $username = "root";
    $pasword = "";
    $dbname = "bd_clinica";

    $conexion = mysqli_connect($host, $username, $pasword, $dbname);
    return $conexion;
}

// Assign the connection to $conn
$conn = connection();

// Consulta SQL para obtener citas desde la base de datos
$sql = "SELECT fecha, hora, medico, motivo FROM citas";
$result = $conn->query($sql);

// Rest of your code...
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Agendadas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #87CEEB;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #3498db;
        }

        table {
            width: 60%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #3498db;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
// Consulta SQL para obtener citas desde la base de datos
$sql = "SELECT fecha, hora, medico, motivo FROM citas";
$result = $conn->query($sql);

// Mostrar las citas en HTML
echo '<h2>Citas Agendadas</h2>';
if ($result->num_rows > 10) {
    echo '<table>';
    echo '<tr><th>Fecha</th><th>Hora</th><th>Médico</th><th>Motivo</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["fecha"] . '</td>';
        echo '<td>' . $row["hora"] . '</td>';
        echo '<td>' . $row["medico"] . '</td>';
        echo '<td>' . $row["motivo"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>No hay citas agendadas por el momento.</p>';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

</body>
</html>
