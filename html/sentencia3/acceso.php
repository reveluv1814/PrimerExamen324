<?php
/*require_once "conexion.php";*/
$usuario = $_POST["login"];
$password = $_POST["pass"];



echo $usuario;
echo "<br>";
echo $password;



$conexion = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");

if ($conexion) {
    echo "conectado";
}
else {
    echo "<h1>Imposible Conectar</h1>";
}


pg_close($conexion);
?>