<?php
$conexion = null;
$servidor = 'localhost';
$database='hotodog';
$user = 'root';
$pass = '';
try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$database, $user, $pass);
}catch (PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;
?>