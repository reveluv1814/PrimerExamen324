<?php
include 'config/database.php';
include 'config/utils.php';
$conexion = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dbConn = new Database();
    if (isset($_GET['id'])) {
        //Mostrar una persona
        $id = $_GET["id"];
        $resultado = pg_query($conexion, "SELECT * FROM persona where id_persona = '$id'");
        $arr = pg_fetch_row($resultado);
    }
    

?>
<link rel="stylesheet" href="public/css/acceso.css?2.0">
    <div class="login-form">
        <h1>Ingresa los Datos a Editar</h1>
        <form action="EditPersona.php?id=<?php echo $arr[0]; ?>" class="form-registro row" method="POST" enctype="multipart/form-data">
            <div class="col-50">
                <div class="form-group ">
                    <label class="texto" for="">IDACCESO</label>
                    <input type="text" class="form-control" name="id_acceso" id="id_acceso" value="<?php echo $arr[1]; ?>"></textarea>
                    <label class="texto" for="">C.I.</label>
                    <input type="text" class="form-control" name="ci" id="ci" value="<?php echo $arr[2]; ?>"></textarea><br>
                    <label class="texto" for="">NOMBRE COMPLETO</label>
                    <input type="text" class="form-control" name="nombre_c" id="nombre_c" value="<?php echo $arr[3]; ?>"></textarea>
                    <label class="texto" for="">FECHA DE NACIMIENTO</label>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="<?php echo $arr[4]; ?>"></textarea>
                    <label class="texto" for="">DEPARTAMENTO</label>
                    <select name="departamento" class="form-control">
                        <option value="01" <?php if ($arr[5] == "01") : ?>selected<?php endif ?>>Sucre</option>
                        <option value="02" <?php if ($arr[5] == "02") : ?>selected<?php endif ?>>La Paz</option>
                        <option value="03" <?php if ($arr[5] == "03") : ?>selected<?php endif ?>>Cochabamba</option>
                        <option value="04" <?php if ($arr[5] == "04") : ?>selected<?php endif ?>>Oruro</option>
                        <option value="05" <?php if ($arr[5] == "05") : ?>selected<?php endif ?>>Potosi</option>
                        <option value="06" <?php if ($arr[5] == "06") : ?>selected<?php endif ?>>Tarija</option>
                        <option value="07" <?php if ($arr[5] == "07") : ?>selected<?php endif ?>>Santa Cruz</option>
                        <option value="08" <?php if ($arr[5] == "08") : ?>selected<?php endif ?>>Beni</option>
                        <option value="09" <?php if ($arr[5] == "09") : ?>selected<?php endif ?>>Pando</option>
                    </select>
                </div>
            </div>
            <div class="col-50">

                <input type="submit" class="log-btn" value="Actualizar">
                <a type="submit" onclick="crud.php" class="log-btn2" value="Cancelar">Cancelar</a>
            </div>

        </form>
    </div>
<?php
}
exit();
//42:53
?>