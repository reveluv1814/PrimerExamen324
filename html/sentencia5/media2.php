<?php
session_start();
require_once "conexion.php";
$usuario=$_SESSION['nombre_usuario'];

/*PREGUNTO SI ES ESTUDIANTE*/
$query="SELECT p.nombre_c
                FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
                INNER JOIN tiene t ON p.id_persona = t.id_persona
                INNER JOIN rol r ON t.id_rol = r.id_rol
                WHERE r.nombre = 'director' and a.usuario = '$usuario'";

$consulta = pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);


if($usuario == null || $usuario == '' || $cantidad==0){
    echo '<h1>Usted no tiene Autorización</h1>';
    die();
}
else{
    include ('header.php');
    echo "<h2 style= 'widt:10%;background-color:#F7AA00; margin-left:3%;margin-right:80%;padding:5px;border-radius:10px 10px 0 0; font-size:30px;color:black; font-weight: 300;'>Bienvenido $usuario</h2>";
} 








$sql_media = pg_query($conexion,"SELECT * FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
INNER JOIN persona p ON ins.id_persona = p.id_persona"
);

$lapaz = array();

while($value = pg_fetch_array($sql_media)){
    
        if($value["departamento"] == '02'){
            array_push($lapaz,$value["notafinal"]);
        }
        echo "<br>";
    
}
echo var_dump($lapaz);




?>