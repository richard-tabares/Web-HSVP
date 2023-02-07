<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();

//recibimos variables
$titNoticia = $_POST['titNoticia'];
$desNoticia = $_POST['desNoticia'];
$fotoNoticia = $_FILES['fotoNoticia'];
$adjuntos = $_FILES['adjunto'];
$fechaNoticia = date('d/m/Y');

//ruta donde se va guardar
$carpeta = "assets/news/";

//obtenemos numero random para el nombre del la foto
$random = rand();

//ruta con nombre del archivo a cargar
$ruta = $carpeta . $random.$fotoNoticia['name'];

//sql para guardar la noticia
$sql = "insert  into noticias(titulo,fecha,descripcion,fotoNoticia) values ('" . $titNoticia . "','" . $fechaNoticia . "','" . $desNoticia . "','" . $ruta . "')";
$conectar->query($sql);

//funcion para cargar el archivo al servidor
if (move_uploaded_file($fotoNoticia['tmp_name'], "../" . $ruta)) {
    echo "la noticia se cargo exitosamente " . '<a href="../crearNoticia.php"> Volver</a>';
} else {
    echo "La noticia no se creo, por favor volver a intentarlo";
}
echo '<meta http-equiv="refresh" content="3;url=../crearNoticia.php" />';

//consultamos la ultima noticia ingresada
$sql = "select MAX(idNoticia) as id from noticias";
$res = $conectar->query($sql);
$id = $res->fetch_array(MYSQLI_ASSOC);

//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
foreach ($adjuntos['tmp_name'] as $key => $tmp_name) {
    $rutaAdjunto = $carpeta . $adjuntos['name'][$key];
    $nombre = strstr($adjuntos['name'][$key],'.', true);
    if (move_uploaded_file($adjuntos['tmp_name'][$key], "../" . $rutaAdjunto)) {

        //guardamos la informacion de los adjuntos
        $sql = "insert into noticiasadjuntos(idNoticia,nombre,ruta) values (" . $id['id'] . ",'" . $nombre . "','" . $rutaAdjunto . "')";
        $conectar->query($sql);
    }
}
