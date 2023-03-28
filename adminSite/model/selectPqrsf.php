<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//se verifica si recogio la variable y se captura
if (isset($_POST['idPqrsf'])) {
    $idPqrsf = $_POST['idPqrsf'];
    $query = $conectar->query("select * from pqrs where idpqrsf = $idPqrsf");

    while ($row = $query->fetch_assoc()) {
        $resJson[] = $row;
    }
    echo json_encode($resJson);
}
