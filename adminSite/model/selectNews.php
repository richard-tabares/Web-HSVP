<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//se verifica si recogio la variable y se captura
if (isset($_POST['idNoticia'])) {
    $idNoticia = $_POST['idNoticia'];
    $query = $conectar->query("select * from noticias where idNoticia = $idNoticia");

    while ($row = $query->fetch_assoc()) {
        $resJson[] = $row;
    }
    echo json_encode($resJson);
}
