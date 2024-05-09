<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://i.pinimg.com/564x/da/47/79/da4779d5004ff9b252f14788341ee202.jpg)
        }

        .result-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #3498db;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #3498db;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        #aceptar-button {
            background-color: #1a5276;
            color: #ffffff;
            float: left;
        }

        #pdf-button {
            background-color: #2ecc71;
            color: #ffffff;
            float: right;
        }
    </style>
</head>

<body>
    <?php
    include('conexion.php');
    $conn = connection();
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $medico = $_POST["medico"];
        $motivo = $_POST["motivo"];

        $stmt = $conn->prepare("CALL AgendarCita(?, ?, ?, ?)");

        $stmt->bind_param("ssis", $fecha, $hora, $idMascota, $idMedico);

        $idMascota = 1;
        $idMedico = 1;

      
        echo '<div class="result-container">';
        echo '<h2>Cita agendada exitosamente</h2>';
        echo "<p>Fecha: $fecha</p>";
        echo "<p>Hora: $hora</p>";
        echo "<p>Médico: $medico</p>";
        echo "<p>Motivo de la visita: $motivo</p>";

        // Botón de Aceptar
        echo '<button id="aceptar-button" onclick="redirigir()">Aceptar</button>';

        // Botón de PDF
        echo '<button id="pdf-button" onclick="imprimirPDF()">Imprimir Cita en PDF</button>';
    }
    ?>

    <script>
        function redirigir() {
            // Redirige a tu archivo PHP
            window.location.href = 'perfilpaciente.php';
        }

        function imprimirPDF() {
            // Agrega aquí el código necesario para generar el PDF y abrir la ventana de impresión
            // Por ejemplo, puedes utilizar bibliotecas como jsPDF o html2pdf para generar el PDF en el lado del cliente
            // y luego abrir la ventana de impresión.

            // Ejemplo con jsPDF:
            /*
            var doc = new jsPDF();
            doc.text('Contenido del PDF', 10, 10);
            doc.save('cita.pdf');
            */
        }
    </script>
</body>

</html>
