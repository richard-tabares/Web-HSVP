<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//recibimos variables
$idNoticia = $_POST['idNoticia'];
$titNoticia = $_POST['title'];
$desNoticia = $_POST['description'];
$carpeta = "../assets/news/";
$random = rand();
//verificamos que la foto de la noticias haya sido enviada
if (isset($_FILES['image'])) {
    $fotoNoticia = $_FILES['image'];
    $ruta = $carpeta . $random . $fotoNoticia['name'];
}
//verificamos que los archivos adjuntos de la noticia hayan sido enviados
if (isset($_FILES['attach'])) {
    $adjuntos = $_FILES['attach'];
}
//formateamo la fecha
$fechaNoticia = date('Y-m-d');
$uploadAttach = "true";

//sql para guardar la noticia
$sql = "UPDATE noticias SET titulo = '" . $titNoticia . "',descripcion = '" . $desNoticia . "' where idNoticia = $idNoticia";
//sql para guarda la noticia con la ruta de la foto
if (isset($fotoNoticia)) {
    $sql = "UPDATE noticias SET titulo = '" . $titNoticia . "',descripcion = '" . $desNoticia . "',fotoNoticia = '" . $ruta . "' where idNoticia = $idNoticia";
}
if ($conectar->query($sql)) {
    //cargar la nueva foto de la noticia al servidor
    if (isset($fotoNoticia)) {
        move_uploaded_file($fotoNoticia['tmp_name'], "../" . $ruta);
    }
    //cargar mas archivos adjutos al servidor
    if (isset($adjuntos)) {
        //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
        foreach ($adjuntos['tmp_name'] as $key => $tmp_name) {
            $rutaAdjunto = $carpeta . $adjuntos['name'][$key];
            $nombre = strstr($adjuntos['name'][$key], '.', true);
            //cargamos los archivos
            if (move_uploaded_file($adjuntos['tmp_name'][$key], "../" . $rutaAdjunto)) {
                //guardamos la informacion de los adjuntos
                $sql = "insert into noticiasadjuntos(idNoticia,nombre,ruta) values (" . $idNoticia . ",'" . $nombre . "','" . $rutaAdjunto . "')";
                if ($conectar->query($sql)) {
                    $uploadAttach = "true";
                } else {
                    $uploadAttach = "false";
                }
            } else {
                $uploadAttach = "false";
            }
        }
    }
    echo json_encode($uploadAttach);
} else {
    echo json_encode("false");
}
