<?php

class Conexion extends PDO {
    private $servidor = 'postgres';
    private $usuario = 'neil';
    private $clave = 'admin';
    private $base = 'mibaseneil';
    public function __construct() {
        try
        {
            parent::__construct('pgsql:host='.$this->servidor.';dbname='.$this->base,$this->usuario, $this->clave, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        catch (PDOException $e)
        {
            echo 'Error: '.$e->getMessage();
            exit;
        }
    }
}
/*$host = 'postgres';
$dbname = 'mibaseneil';
$username = 'neil';
$password = 'admin';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";

try{
 $conn = new PDO($dsn);
 
 if($conn){
  echo "Successfully connected to $dbname!";
 }
}catch (PDOException $e){
 echo $e->getMessage();
}
*/
 
 
 
 /*class conexion extends PDO {
    private $servidor = "postgres";
    private $usuario = "neil";
    private $pass = "admin";
    private $base = "mibaseneil";
    public function __construct() {
        try
        {
            //psql postgresql://neil:admin@postgres:5432/mibaseneil?sslmode=require
            parent::__construct('psql postgresql://neil:admin@postgres:5432/mibaseneil?sslmode=require',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        }
        catch(PDOException $e)
        {
            echo 'Error: '.$e->getMessage();
            exit;
        }
    }
 }*/
?>