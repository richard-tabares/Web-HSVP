<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//recibimos variables
$titNoticia = $_POST['title'];
$desNoticia = $_POST['description'];
$fotoNoticia = $_FILES['image'];
if (isset($_FILES['attach'])) {
    $adjuntos = $_FILES['attach'];
}
$fechaNoticia = date('d/m/Y');
$uploadAttach = "true";

//ruta donde se va guardar
$carpeta = "../assets/news/";

//obtenemos numero random para el nombre del la foto
$random = rand();

//ruta con nombre del archivo a cargar
$ruta = $carpeta . $random . $fotoNoticia['name'];

//sql para guardar la noticia
$sql = "insert  into noticias(titulo,fecha,descripcion,fotoNoticia) values ('" . $titNoticia . "','" . $fechaNoticia . "','" . $desNoticia . "','" . $ruta . "')";
if ($conectar->query($sql)) {
    //funcion para cargar el archivo al servidor
    if (move_uploaded_file($fotoNoticia['tmp_name'], "../" . $ruta)) {
        //consultamos la ultima noticia ingresada
        $sql = "select MAX(idNoticia) as id from noticias";
        $res = $conectar->query($sql);
        $id = $res->fetch_array(MYSQLI_ASSOC);

        if (isset($adjuntos)) {
            //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
            foreach ($adjuntos['tmp_name'] as $key => $tmp_name) {
                $rutaAdjunto = $carpeta . $adjuntos['name'][$key];
                $nombre = strstr($adjuntos['name'][$key], '.', true);
                if (move_uploaded_file($adjuntos['tmp_name'][$key], "../" . $rutaAdjunto)) {
                    //guardamos la informacion de los adjuntos
                    $sql = "insert into noticiasadjuntos(idNoticia,nombre,ruta) values (" . $id['id'] . ",'" . $nombre . "','" . $rutaAdjunto . "')";
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
} else {
    echo json_encode("false");
}
