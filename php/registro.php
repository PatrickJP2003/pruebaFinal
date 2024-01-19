<?php
include 'conexion.php';
$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];

$consulta="INSERT INTO usuarios (email, contrasenia) VALUES ('$email', '$contrasenia')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo "Registro Exitoso";
}else{
    echo"No se pudo registrar";
}
?>