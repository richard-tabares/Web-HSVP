<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();

$idPqrsf = $_POST["idPqrsf"];

$query = $conectar->query("UPDATE pqrs SET estado = 'Resuelto' WHERE idpqrsf = $idPqrsf");
$rows = $conectar->affected_rows;
if($rows > 0){
    echo json_encode("true");
}else {
    echo json_encode("false");
}