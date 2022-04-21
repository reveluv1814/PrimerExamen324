<?php
session_start();
require_once "conexion.php";
$usuario=$_SESSION['nombre_usuario'];

/*PREGUNTO SI ES ESTUDIANTE*/
$query="SELECT p.nombre_c
                FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
                INNER JOIN tiene t ON p.id_persona = t.id_persona
                INNER JOIN rol r ON t.id_rol = r.id_rol
                WHERE r.nombre = 'estudiante' and a.usuario = '$usuario'";

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
    <h2 class="titulon">Tus Notas son:</h2>  
    <table class="table">
        <thead>
            <th><b>Nombre</b></th>
            <th><b>Sigla</b></th>
            <th><b>Nota #1</b></th>
            <th><b>Nota #2</b></th>
            <th><b>Nota #3</b></th>
            <th><b>Nota FINAL</b></th>      
        </thead>
            <tbody>
            <?php
                $sql_nota = pg_query($conexion,"SELECT p.nombre_c,i.sigla,i.nota1,i.nota2,i.nota3,i.notafinal
                        FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
                        INNER JOIN tiene t ON p.id_persona = t.id_persona
                        INNER JOIN rol r ON t.id_rol = r.id_rol
                        INNER JOIN inscrita ins ON p.id_persona = ins.id_persona
                        INNER JOIN inscripcion i ON ins.id_inscripcion = i.id_inscripcion 
                        WHERE r.nombre = 'estudiante' and a.usuario = '$usuario';"
                    );

                while($value = pg_fetch_array($sql_nota)){
                    ?>
                    <tr>
                        <td><?php echo $value[0]; ?></td>
                        <td><?php echo $value[1]; ?></td>
                        <td><?php echo $value[2]; ?></td>
                        <td><?php echo $value[3]; ?></td>
                        <td><?php echo $value[4]; ?></td>
                        <td><?php echo $value[5]; ?></td>
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