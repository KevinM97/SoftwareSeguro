<?php

require 'conexion.php';
session_start();

$usuario = $_POST['user'];
$clave = $_POST['password'];

$q = "SELECT COUNT(*) as contar from user where user = '$usuario' and password = '$clave'";

$consulta = mysqli_query($conn,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
    $_SESSION["username"] = $usuario;
     header("location: ../home.php");
}
else{
    echo "Credenciales incorrectas";
    header("location: ../login.php");
}


?>