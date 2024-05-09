<?php
 include 'conexion.php';
$conexion = connection();


 $nombrepropietario = $_POST['nombrepropietario'];
 $telefono= $_POST['telefono'];
 $nombremascota= $_POST['nombremascota'];
 $sexo = $_POST['sexo'];
 $edadmascota= $_POST['edadmascota'];
 $razamascota = $_POST['razamascota'];
 $especie  = $_POST['especie'];
 $enfermedades = $_POST['enfermedades'];
 $alergias = $_POST['alergias'];
 $correoelectronico = $_POST['correoelectronico'];
 $contraseña= $_POST['contraseña'];

 $query = "insert into mascota  (NombrePropietario ,Telefono, NombreMascota, Sexo, EdadMascota, 	RazaMascota, Especie , Enfermedades ,Alergias,CorreoElectronico	, 	Contraseña) 
 values ('$_REQUEST[nombrepropietario]','$_REQUEST[telefono]', '$_REQUEST[nombremascota]', '$_REQUEST[sexo]','$_REQUEST[edadmascota]', '$_REQUEST[razamascota]','$_REQUEST[especie]',
 '$_REQUEST[enfermedades]','$_REQUEST[alergias]','$_REQUEST[correoelectronico]','$_REQUEST[contraseña]')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

         Header("Location:Login.php");


}else{
    echo '
    <script>
    alert("Intentalo de nuevo, usuario no registrado");

    </script>
';

}


mysqli_query($conexion);
?>

