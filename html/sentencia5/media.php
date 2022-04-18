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
            <th><b>Departamento</b></th>
            <th><b>Media de Notas</b></th>      
        </thead>
            <tbody>
            <?php
                $sql_media = pg_query($conexion,"SELECT p.departamento,AVG((nota1+nota2+nota3+notafinal)/4)
                        FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
                        INNER JOIN persona p ON ins.id_persona = p.id_persona
                        GROUP BY p.departamento
                        ORDER BY p.departamento"
                    );

                while($value = pg_fetch_array($sql_media)){
                    ?>
                    <tr>
                        <td><?php echo $value[0]; ?></td>
                        <td><?php echo $value[1]; ?></td>
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