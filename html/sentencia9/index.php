<?php

    include 'conexion.php';
   
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
}
?>