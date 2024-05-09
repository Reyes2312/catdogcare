<?php
include('conexion.php');
$conn = connection();
include "validarpaciente.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CATDOG CARE</title>
     <link rel="stylesheet" href="clinica.css">
     <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header>
    <div style="float: left;"> <!-- Agregado: Div para alinear el logo a la izquierda -->
        <img src="Logo.png" alt="logo" width="50px">
    </div>
    <div style="float: right;"> <!-- Agregado: Div para alinear el título a la derecha -->
        <h1 class="titulo">¡Hola, bienvenidos a CATDOG CARE!</h1>
    </div>
    <nav>
        <a href="clinicaprincipal.php">Inicio</a>
        <a href="quienesomos.php">¿Quiénes somos?</a>
        <a href="Especialidades.php">Especialidades</a>
        <a href="ubicacion.php">Clínica</a>
        <a href="Inicio_sesion_medico.php">¿Eres médico?</a>
        
        
    </nav>
  </header>
        <style>
nav {
   background-color: #3498db; 
   padding: 10px;
   text-align: center;
}

nav a {
   color: #fff; 
   text-decoration: none;
   font-weight: bold;
   font-size: 18px;
   margin: 0 10px; 
   padding: 10px 15px; /* Ajusta el relleno para hacer los botones más grandes */
   border-radius: 5px; /* Añade bordes redondeados */
   transition: background-color 0.3s ease; /* Efecto de transición para el color de fondo */
}

nav a:hover {
   background-color: #2c3e50; /* Cambia el color de fondo al pasar el mouse */
}
</style>
</header>
<body>

  <main>
    
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div  class="caja__trasera__login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para entrar en la página</p>
          <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>

        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Registrarse para que puedas iniciar sesión </p>
          <button id="btn__registarse">Registrarse</button>
        </div>
      </div>

      <div class="contenedor__login-register">
         
            <form action="" method="POST" class="formulario__login" enctype="multipart/form-data">
             
              <h2>Iniciar Sesión</h2>
              <input type="text" placeholder="Correo Electrónico" name="Correoelectronico" required>
              <input type="password" placeholder="Contraseña" name="contraseña" required>
              <input type="submit" name="boton" value="Entrar">
              
            
            </form>

            <form action="registro_usuario_be.php" method="POST" class="formulario__register">
              <h2>Registrarse</h2>
              <input type="text" placeholder="Nombre completo del propietario" name="nombrepropietario" id="nombrepropietario">
              <input type="text" placeholder="Telefono" name="telefono" id="telefono">
              <input type="text" placeholder="Nombre mascota"  name="nombremascota" id="nombremascota">
              <input type="text" placeholder="Sexo"  name="sexo" id="sexo">   
              <input type="text" placeholder="Edad mascota"  name="edadmascota" id="edadmascota">
              <input type="text" placeholder="Raza"  name="razamascota" id="razamascota" >
              <input type="text" placeholder="Especie"  name="especie" id="especie" >
              <input type="text" placeholder="Enfermedades"  name="enfermedades" id="enfermedades">
              <input type="text" placeholder="Alergias"  name="alergias" id="alergias">
              <input type="text" placeholder="Correo Electrónico"  name="correoelectronico" id="correoelectronico">
              <input type="password" placeholder="Contraseña"  name="contraseña" id="contraseña">
              <button>Registrarse</button>
            </form>
      
            
   
      </div>
      </div>
      
</body> 
</head> 
          

</html>
</html>
  </main>
</body>
    <script src="script.js"></script>
</html>
