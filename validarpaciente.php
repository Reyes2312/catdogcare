<?php
session_start();
if (!empty($_POST["boton"])){
    if (!empty($_POST["Correoelectronico"]) and !empty($_POST["contraseña"])){
    $Correoelectronico = $_POST['Correoelectronico'];
    $contraseña = $_POST['contraseña'];
    $sql=$conn->query ("call ValidarMascota ('{$Correoelectronico}','{$contraseña}')");
    if($datos=$sql->fetch_object()){
        $_SESSION["IdMascota"] = $datos->IdMascota;
        $_SESSION["NombrePropietario"] = $datos->NombrePropietario;
    

    header ("location:perfilpaciente.php");
}
else{
    echo"Acceso denegado";
}
}else{
    echo"campos vacios";
}
}
?>