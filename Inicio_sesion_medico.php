<?php
include('conexion.php');
$conn = connection();
include "validarmedico.php";
?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="inicio_sesion_medico.css">

<form action="" method="POST" class="formulario__login2">             
             
    <form action="" method="POST" class="formulario__login2">             
        
      
<h2>¡Bienvenido medico!</h2>
        <input type="text" placeholder="Correo Electrónico" name="CorreoElectronico" required>
        <input type="password" placeholder="Contraseña" name="Contrasena" required>
        
    
<input type="submit" name="boton" value="Entrar">
    
 
</form>
</body>
           
           </form>