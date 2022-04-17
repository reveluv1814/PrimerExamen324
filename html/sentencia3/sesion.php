<?php
require 'conexion.php';
session_start();
$usuario = $_POST["login"];
$password = $_POST["pass"];

$query="SELECT * FROM acceso WHERE usuario='$usuario' AND password = '$password'";
$consulta = pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$usuario;
    header("Location: pantallaAC.php");
}
else{
    echo "datos errroneos";
}

?>