<?php
include 'config/database.php';
include 'config/utils.php';
$conexion = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");

$id = $_GET["id"];

$acceso = $_POST["id_acceso"];
$ci = trim($_POST["ci"]);
$nombrec = trim($_POST["nombre_c"]);
$fecha = trim($_POST["fecha_nac"]);
$departamento = trim($_POST["departamento"]);

pg_query($conexion,"UPDATE persona SET id_acceso = '$acceso', ci = '$ci', nombre_c = '$nombrec', fecha_nac = '$fecha', departamento = '$departamento'  where id_persona = $id ");

header("Location: crud.php");
exit();

?>