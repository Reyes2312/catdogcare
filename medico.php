<?php

// Configuración de la conexión a la base de datos
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear tabla de pacientes
$sqlCreatePacientes = "CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    genero VARCHAR(10),
    enfermedad VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(20)
)";

if ($conn->query($sqlCreatePacientes) === TRUE) {
    echo "Tabla de pacientes creada con éxito\n";
} else {
    echo "Error al crear la tabla de pacientes: " . $conn->error;
}

// Insertar datos de ejemplo en la tabla de pacientes
$sqlInsertPacientes = "INSERT INTO pacientes (nombre, genero, enfermedad, email, telefono) VALUES
    ('Paciente1', 'Masculino', 'Enfermedad1', 'paciente1@example.com', '123456789'),
    ('Paciente2', 'Femenino', 'Enfermedad2', 'paciente2@example.com', '987654321'),
    ('Paciente3', 'Masculino', 'Enfermedad1', 'paciente3@example.com', '456789012')";

if ($conn->query($sqlInsertPacientes) === TRUE) {
    echo "Datos de pacientes insertados con éxito\n";
} else {
    echo "Error al insertar datos de pacientes: " . $conn->error;
}

// Crear procedimientos almacenados adicionales

// Procedimiento para el Reporte 01
$sqlCreateSPReporte01 = "
DELIMITER //
CREATE PROCEDURE SP_Reporte01PacientesSimilitudEnfermedades(IN enfermedad VARCHAR(255))
BEGIN
    SELECT *
    FROM pacientes
    WHERE enfermedad LIKE CONCAT('%', enfermedad, '%');
END //
DELIMITER ;
";

if ($conn->multi_query($sqlCreateSPReporte01) === TRUE) {
    echo "Procedimiento almacenado para el Reporte 01 creado con éxito\n";
} else {
    echo "Error al crear el procedimiento almacenado para el Reporte 01: " . $conn->error;
}

// Procedimiento para el Reporte 02
$sqlCreateSPReporte02 = "
DELIMITER //
CREATE PROCEDURE SP_Reporte02PacientesFiltro(IN genero VARCHAR(10), IN nombre VARCHAR(100))
BEGIN
    IF genero IS NOT NULL AND nombre IS NOT NULL THEN
        -- Ambos parámetros están presentes
        SELECT *
        FROM pacientes
        WHERE genero = genero AND nombre LIKE CONCAT('%', nombre, '%');
    ELSEIF genero IS NOT NULL THEN
        -- Solo el parámetro de género está presente
        SELECT *
        FROM pacientes
        WHERE genero = genero;
    ELSEIF nombre IS NOT NULL THEN
        -- Solo el parámetro de nombre está presente
        SELECT *
        FROM pacientes
        WHERE nombre LIKE CONCAT('%', nombre, '%');
    ELSE
        -- Ningún parámetro presente, seleccionar todos los registros
        SELECT *
        FROM pacientes;
    END IF;
END //
DELIMITER ;
";

if ($conn->multi_query($sqlCreateSPReporte02) === TRUE) {
    echo "Procedimiento almacenado para el Reporte 02 creado con éxito\n";
} else {
    echo "Error al crear el procedimiento almacenado para el Reporte 02: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
