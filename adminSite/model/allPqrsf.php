<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//creamos variables en blanco
$type = "";
$state = "";
$date = "";
//recogemos las variables

if(isset($_POST["type"])){
    $type = $_POST["type"];
}
if(isset($_POST["state"])){
    $state = $_POST["state"];
}
if(isset($_POST["date"])){
    $date = $_POST["date"];
}
//se verifica si recogio la variable y se captura
$sql = "select idpqrsf,tipoProceso,fecha,estado,radicado from pqrs ";
//verificamos los campos del filtro
if($type != "" || $state != "" || $date != ""){
    $where = "where ";
}
if($type != ""){
    $where .= "tipoProceso = '" . $type . "' AND ";
}
if($state != ""){
    $where .= "estado = '" . $state . "' AND ";
}
if($date != ""){
    $where .= "fecha = '" . $date . "' AND ";
}

if (isset($where)) {
    $finalWhere = trim($where, "AND ");
}

$order = " ORDER BY idpqrsf DESC";
//construimos la consulta
if(isset($where)){
    $sql .= $finalWhere . $order;
}else {
    $sql .= $order;
}
//echo $sql;
$query = $conectar->query($sql);
$resJson = array();
while ($row = $query->fetch_assoc()) {
    $resJson[] = $row;
}
echo json_encode($resJson);
