<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sisgestionescolar');

define('APP_NAME','SISTEMA DE GESTION ESCOLAR');
define('APP_URL','http://localhost/sisgestionescolar');
define('KEY_API_MAPS','');

/** CONEXION A LA BASE DE DATOS */

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4"));

    // echo "Conexión exitosa a la base de datos";

}catch (PDOException $e){

    echo "error no se pudo conectar a la base de datos";

}
