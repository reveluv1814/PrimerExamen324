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
			$sql = $dbConn->prepare("SELECT * FROM persona");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 OK");
			//echo json_encode($sql->fetchAll());
			//echo json_decode(json_encode($sql->fetchAll()));
			$arr = json_decode(json_encode($sql->fetchAll()),true);
			//echo var_dump($arr[0]);
			?>
			<h2 class="titulon">Notas por Departamento:</h2>  
    <table class="table">
        <thead>
            <th><b>Depto. CH</b></th>
            <th><b>Depto. LP</b></th>
            <th><b>Depto. CB</b></th>
            <th><b>Depto. RU</b></th>
            <th><b>Depto. PT</b></th>  
			<th><b>Depto. yT</b></th>    
        </thead>
            <tbody>
            <?php
                
                foreach($arr as $key) {
                    ?>
                    <tr>
                        <td><?php echo $key['id_persona']; ?></td>
                        <td><?php echo $key['id_acceso']; ?></td>
                        <td><?php echo $key['ci']; ?></td>
                        <td><?php echo $key['nombre_c']; ?></td>
                        <td><?php echo $key['fecha_nac']; ?></td>
                        <td><?php echo $key['departamento']; ?></td>
                    </tr>    
                    <?php
                }
            ?>
            </tbody>
    </table>
	<?php
			exit();
		}
	}

	// Crear una nueva persona
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$input = $_POST;
		$sql = "INSERT INTO persona
          (id_acceso, ci, nombre_c, fecha_nac,departamento)
          VALUES
          (:idacc, :ci, :nombrec, :fecha, :departamento)";
		$statement = $dbConn->prepare($sql);
		bindAllValues($statement, $input);
		$statement->execute();
		$postId = $dbConn->lastInsertId();
		if ($postId) {
			$input['id_persona'] = $postId;
			header("HTTP/1.1 200 OK");
			echo json_encode($input);
			exit();
		}
	}

	//Borrar
	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$id = $_GET['id'];
		$statement = $dbConn->prepare("DELETE FROM persona where id_persona=:id");
		$statement->bindValue(':id', $id);
		$statement->execute();
		header("HTTP/1.1 200 OK");
		exit();
	}

	//Actualizar
	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$input = $_GET;
		$postId = $input['id_persona'];
		$fields = getParams($input);

		$sql = "
          UPDATE persona
          SET $fields
          WHERE id_persona='$postId'
           ";

		$statement = $dbConn->prepare($sql);
		bindAllValues($statement, $input);

		$statement->execute();
		header("HTTP/1.1 200 OK");
		exit();
	}


	//En caso de que ninguna de las opciones anteriores se haya ejecutado
	header("HTTP/1.1 400 Bad Request");
}













 /*   include 'conexion.php';
   
if ($_SERVER['REQUEST_METHOD']=='GET')
{
	$pdo = new Conexion();
	if (isset($_GET['id']))
	{
		$sql = $pdo->prepare("select * from persona where id_persona=:id");
		$sql->bindValue(':id_persona',$_GET['id']);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
	}
	else
	{
		$sql = $pdo->prepare("select * from acceso");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
	}
}*/
