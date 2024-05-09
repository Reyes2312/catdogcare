<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubicacion</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">

    <!-- Agrega las bibliotecas de Bootstrap y jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="ubicacion.css">
</head>
</body>
<header>
   <nav>
       <a href="clinicaprincipal.php">Inicio</a>
       <a href="quienesomos.php">¿Quiénes somos?</a>

       <a href="Especialidades.php">Especialidades</a>
       <a href="ubicacion.php">Clínica</a>
       <a href="Login.php">¿Tienes una cuenta? O Registrate aquí</a>
   <!-- <form class="d-flex" role="search">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form> -->   
       
   </nav>
   <style>
nav {
   background-color: #3498db; /* Color de fondo azul brillante */
   padding: 10px;
   text-align: center;
}

nav a {
   color: #fff; /* Color del texto blanco */
   text-decoration: none;
   font-weight: bold;
   font-size: 18px;
   margin: 0 10px; /* Agrega espacio entre los enlaces */
   padding: 10px 15px; /* Ajusta el relleno para hacer los botones más grandes */
   border-radius: 5px; /* Añade bordes redondeados */
   transition: background-color 0.3s ease; /* Efecto de transición para el color de fondo */
}

nav a:hover {
   background-color: #2c3e50; /* Cambia el color de fondo al pasar el mouse */
}
</style>
<body>



<div class="inicio">
    <h2>Bienvenido a nuestra Clínica Veterinaria</h2>
    <p>Donde el cuidado y el amor se encuentran con la experiencia médica.</p>
</div>

<div class="nuestra-direccion">
    <h2>¡Nuestra Ubicación!</h2>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53876.28264951637!2d-114.81657055136719!3d32.43876950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d64f0d6508eb59%3A0xb55fd379482333d4!2sPatitas%20Veterinaria!5e0!3m2!1sen!2smx!4v1700785043040!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ecf0f5; /* Azul celeste claro */
        color: #000000; /* Color de texto principal */
        background-image: url(https://img.freepik.com/vector-premium/patron-perro-costuras-huellas-pata-huesos-corazones-bolas-textura-pie-gato-patron-huella-perro-huesos-textura-perro-ilustracion-vectorial-dibujada-mano-estilo-garabato-sobre-fondo-blanco_192280-1320.jpg);
    }

    nav {
        background-color: #3498db; /* Azul brillante */
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #fff; /* Texto blanco */
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
    }

    .inicio {
        width: 80%;
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #3498db; /* Borde azul brillante */
        border-radius: 10px;
        background-color: #fff; /* Fondo blanco */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra tenue */
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .inicio:hover {
        transform: scale(1.05); /* Aumenta ligeramente el tamaño al pasar el mouse */
    }

    .nuestra-direccion {
        width: 80%;
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #3498db; /* Borde azul brillante */
        border-radius: 10px;
        background-color: #fff; /* Fondo blanco */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra tenue */
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .nuestra-direccion:hover {
        transform: scale(1.05); /* Aumenta ligeramente el tamaño al pasar el mouse */
    }

    .mapa {
        width: 100%;
        text-align: center;
        margin-top: 20px;
    }

    .mapa iframe {
        width: 100%;
        max-width: 600px;
        height: 450px;
        border: 1px solid #ddd; /* Borde gris claro */
        border-radius: 10px;
    }
</style>

</body>
</html>

