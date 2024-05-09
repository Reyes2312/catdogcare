<?php
session_start();
if (!empty($_POST["boton"])){
    if (!empty($_POST["CorreoElectronico"]) and !empty($_POST["Contrasena"])){
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $contrasena = $_POST['Contrasena'];
    $sql=$conn->query ("call ValidarMedico ('{$CorreoElectronico}','{$contrasena}')");
    if($datos=$sql->fetch_object()){
        $_SESSION["IdMedico"] = $datos->IdMedico;
        $_SESSION["NombreMedico"] = $datos->NombreMedico;
    

    header ("location:PerfilMedico.php");
}
else{
    echo"Acceso denegado";
}
}else{
    echo"campos vacios";
}
}
?>