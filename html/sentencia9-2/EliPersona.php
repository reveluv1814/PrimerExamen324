<?php
    include 'config/database.php';
    include 'config/utils.php';
    $conexion = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");
    
    $id = $_GET["id"];
    $acce = $_GET["idacceso"];
    $ru = pg_query($conexion,"select id_acceso from persona where id_persona = '$id' LIMIT 1");
    $r = pg_fetch_array($ru);
    $r[0];    
    pg_query($conexion,"DELETE FROM persona where id_persona='$id'");
    pg_query($conexion,"DELETE FROM acceso where id_acceso='$acce'");
    header("Location: crud.php");
    
?>