<?php

$conexion = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");


$ci = trim($_POST["ci"]);
$nombrec = trim($_POST["nombrec"]);
$fecha = trim($_POST["fecha_nac"]);
$departamento = trim($_POST["departamento"]);
$user =  trim($_POST["user"]);
$pass =  trim($_POST["pass"]);
$rol =  trim($_POST["rol"]);

pg_query($conexion,"INSERT INTO acceso (usuario, password) values ('$user', '$pass')");
pg_query($conexion,"INSERT INTO persona (id_acceso, ci, nombre_c, fecha_nac, departamento) values ((SELECT id_acceso from acceso WHERE usuario='$user' and password='$pass' LIMIT 1),'$ci','$nombrec','$fecha','$departamento')");
pg_query($conexion,"INSERT INTO tiene (id_persona, id_rol) values ((SELECT id_persona from persona WHERE ci='$ci' LIMIT 1),'$rol')");



header("Location: crud.php");
exit();
?>