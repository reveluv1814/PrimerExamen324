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



?>
<style>
    .containertb{
        padding-top:30px;
        padding-bottom:30px;
        margin:0;
        background-color:#DFDFDE;
    }
    .titulon{
        
        font-size:60px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }
    .table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
    }
    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        font-size:18px;
    }
    .table tr:nth-child(even){background-color: #f2f2f2;}

    .table tr:hover {background-color: #ddd;}

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align:center;
        background-color: #1D5C63;
        color: white;
    }
</style>
<div class="containertb">
    <h2 class="titulon">Notas por Departamento:</h2>  
    <table class="table">
        <thead>
            <th><b>Depto. CH</b></th>
            <th><b>Depto. LP</b></th>
            <th><b>Depto. CB</b></th>
            <th><b>Depto. RU</b></th>
            <th><b>Depto. PT</b></th>
            <th><b>Depto. TJ</b></th>
            <th><b>Depto. SC</b></th>
            <th><b>Depto. BE</b></th>
            <th><b>Depto. PD</b></th>      
        </thead>
            <tbody>
            <?php
                $sql_media = pg_query($conexion,"SELECT * FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
                INNER JOIN persona p ON ins.id_persona = p.id_persona"
                );
                
                $departamentos =[
                    'chuquisaca' => array();
                    'lapaz' => array();
                    'cochabamba' => array();
                    'oruro' => array();
                    'potosi' => array();
                    'tarija' => array();
                    'santacruz' => array();
                    'beni'=> array();
                    'pando' => array();
                ];
                
                
                while($value = pg_fetch_array($sql_media)){
                    
                        if($value["departamento"] == '01'){
                            array_push($departamentos['chuquisaca'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '02'){
                            array_push($departamentos['lapaz'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '03'){
                            array_push($departamentos['cochabamba'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '04'){
                            array_push($departamentos['oruro'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '05'){
                            array_push($departamentos['potosi'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '06'){
                            array_push($departamentos['tarija'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '07'){
                            array_push($departamentos['santacruz'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '08'){
                            array_push($departamentos['beni'], $value["notafinal"]);
                        }
                        if($value["departamento"] == '09'){
                            array_push($departamentos['pando'], $value["notafinal"]);
                        }    
                }
                $promch = array_sum($departamentos['chuquisaca'])/count($departamentos['chuquisaca']);
                $promlp = array_sum($departamentos['lapaz'])/count($departamentos['lapaz']);
                $promcb = array_sum($departamentos['cochabamba'])/count($departamentos['cochabamba']);
                $promor = array_sum($departamentos['oruro'])/count($departamentos['oruro']);
                $prompt = array_sum($departamentos['potosi'])/count($departamentos['potosi']);
                $promtj = array_sum($departamentos['tarija'])/count($departamentos['tarija']);
                $promsc = array_sum($departamentos['santacruz'])/count($departamentos['santacruz']);
                $prombn = array_sum($departamentos['beni'])/count($departamentos['beni']);
                $prompd = array_sum($departamentos['pando'])/count($departamentos['pando']);
                ?>
                    <tr>
                        <td><?php echo $promch; ?></td>
                        <td><?php echo $promlp; ?></td>
                        <td><?php echo $$promcb; ?></td>
                        <td><?php echo $promor; ?></td>
                        <td><?php echo $prompt; ?></td>
                        <td><?php echo $promtj; ?></td>
                        <td><?php echo $promsc; ?></td>
                        <td><?php echo $prombn; ?></td>
                        <td><?php echo $prompd; ?></td>
                    </tr>    
            </tbody>
    </table>
</div>

<?php
include "footer.php";
?>