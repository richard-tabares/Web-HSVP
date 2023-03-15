<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//recibimos el id del archivo adjunto
$idAdjunto = $_POST['idAdjunto'];
//consultamos el registro a eliminar para obtener su ruta
$query = $conectar->query("SELECT ruta from noticiasadjuntos WHERE idAdjunto = $idAdjunto");
$row = $query->fetch_assoc();
//sql para eliminar adjuntos de la noticias
$query = $conectar->query("DELETE FROM noticiasadjuntos WHERE idAdjunto = $idAdjunto");
$rowsAttaches = $conectar->affected_rows;
//si el archivo existe, lo eliminamos del servidor
if ($rowsAttaches > 0) {
    $ruta = "../" . $row['ruta'];
    unlink($ruta);
    echo json_encode("true");
} else {
    echo json_encode("false");
}
