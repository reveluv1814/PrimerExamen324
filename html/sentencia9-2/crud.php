<?php
include 'config/database.php';
include 'config/utils.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dbConn = new Database();

    /*
  listar todos las personas o solo uno
 */
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id'])) {
            //Mostrar una persona
            $sql = $dbConn->prepare("SELECT * FROM persona where id_persona=:id");
            $sql->bindValue(':id', $_GET['id']);
            $sql->execute();
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetch(PDO::FETCH_ASSOC));
            exit();
        } else {
            //Mostrar lista de perssonas
            $sql = $dbConn->prepare("SELECT * FROM persona order by id_persona");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            //echo json_encode($sql->fetchAll());
            //echo json_decode(json_encode($sql->fetchAll()));
            $arr = json_decode(json_encode($sql->fetchAll()), true);
            //echo var_dump($arr[0]);
            include 'header.php';
?>
            <link rel="stylesheet" href="public/css/read.css?1.0">
            <div class="containertb">
                <h2 class="titulon">Tabla Persona</h2>
                <table class="table">
                    <thead>
                        <th><b>ID Persona</b></th>
                        <th><b>ID de Acceso</b></th>
                        <th><b>C.I.</b></th>
                        <th><b>Nombre Completo</b></th>
                        <th><b>Fecha de Nacimiento</b></th>
                        <th><b>Código de Departamento</b></th>
                        <th colspan = "2">U/D</th>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($arr as $key) {
                        ?>
                            <tr>
                                <td><?php echo $key['id_persona']; ?></td>
                                <td><?php echo $key['id_acceso']; ?></td>
                                <td><?php echo $key['ci']; ?></td>
                                <td><?php echo $key['nombre_c']; ?></td>
                                <td><?php echo $key['fecha_nac']; ?></td>
                                <td><?php echo $key['departamento']; ?></td>
                                <td><a href="FEditPersona.php?id=<?php echo $key['id_persona']; ?>">Editar</a></td>
                                <td><a href="EliPersona.php?id=<?php echo $key['id_persona']; ?>&idacceso=<?php echo $key['id_acceso']; ?>">Eliminar</a></td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
                <a class="add"href="FCreatePersona.php">Añadir nueva Persona</a>
            </div>
<?php
            include 'footer.php';
            exit();
        }
    }
    //En caso de que ninguna de las opciones anteriores se haya ejecutado
    header("HTTP/1.1 400 Bad Request");
}

?>