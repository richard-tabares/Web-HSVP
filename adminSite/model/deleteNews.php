<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
$idNoticia = $_POST['idNoticia'];
//verificamos si la noticia existe
$query = $conectar->query("SELECT idNoticia,fotoNoticia FROM noticias WHERE idNoticia = $idNoticia");
$rowsNews = $query->num_rows;
$row = $query->fetch_assoc();
//se elimina la foto de la noticia del servidor, si existe la noticia
if ($rowsNews > 0) {
    $ruta = "../" . $row['fotoNoticia'];
    unlink($ruta);
    //sql para eliminar noticia de la BD
    $query = $conectar->query("DELETE FROM noticias WHERE idNoticia = $idNoticia");
    echo json_encode("true");
} else {
    echo json_encode("false");
}
//sql para verificar si la noticias tiene adjuntos
$query = $conectar->query("SELECT idNoticia,ruta FROM noticiasadjuntos WHERE idNoticia = $idNoticia");
$rowsAttaches = $query->num_rows;
//se eliminan todos los archivos adjuntos de la noticia eliminada
if ($rowsAttaches > 0) {
    while ($row = $query->fetch_assoc()) {
        $ruta = "../" . $row['ruta'];
        unlink($ruta);
    }
    //sql para eliminar adjuntos de la noticias en la BD
    $query = $conectar->query("DELETE FROM noticiasadjuntos WHERE idNoticia = $idNoticia");
}
