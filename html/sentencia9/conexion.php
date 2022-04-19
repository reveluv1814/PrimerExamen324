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
?>