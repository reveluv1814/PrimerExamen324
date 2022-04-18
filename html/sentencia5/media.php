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
                $sql_media = pg_query($conexion,"SELECT AVG(case when departamento='01' then notafinal ELSE 0 end) CH,
                                                        AVG(case when departamento='02' then notafinal ELSE 0 end) LP,
                                                        AVG(case when departamento='03' then notafinal ELSE 0 end) CB,
                                                        AVG(case when departamento='04' then notafinal ELSE 0 end) RU,
                                                        AVG(case when departamento='05' then notafinal ELSE 0 end) PT,
                                                        AVG(case when departamento='06' then notafinal ELSE 0 end) TJ,
                                                        AVG(case when departamento='07' then notafinal ELSE 0 end) SC,
                                                        AVG(case when departamento='08' then notafinal ELSE 0 end) BE,
                                                        AVG(case when departamento='09' then notafinal ELSE 0 end) PD
                                                FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
                                                INNER JOIN persona p ON ins.id_persona = p.id_persona;"
                    );

                while($value = pg_fetch_array($sql_media)){
                    ?>
                    <tr>
                        <td><?php echo $value[0]; ?></td>
                        <td><?php echo $value[1]; ?></td>
                        <td><?php echo $value[2]; ?></td>
                        <td><?php echo $value[3]; ?></td>
                        <td><?php echo $value[4]; ?></td>
                        <td><?php echo $value[5]; ?></td>
                        <td><?php echo $value[6]; ?></td>
                        <td><?php echo $value[7]; ?></td>
                        <td><?php echo $value[8]; ?></td>
                        <td><?php echo $value[9]; ?></td>
                    </tr>    
                    <?php
                }
            ?>
            </tbody>
    </table>
</div>

<?php
include "footer.php";
?>