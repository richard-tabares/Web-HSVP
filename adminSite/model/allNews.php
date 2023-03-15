<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//sql para consultar todas las noticias
$sql = "SELECT idNoticia,titulo,fecha FROM noticias";
//verificamos los campos del filtro
if ((isset($_POST['search']) && $_POST['search'] != "") || (isset($_POST['searchDate']) && $_POST['searchDate'] != ""))  {
    //recogemos los  datos del formulario si existen las variables
    $search = $_POST['search'];
    $searchDate = $_POST['searchDate'];
    //adicionamos una clausula where si por lo menos alguna de las dos variables
    //de busqueda tiene algun caracter y segun que variable se addicionan las codiciones en el SQL
    $sql = $sql . " WHERE";
    if($_POST['search'] != ""){
        $sqlInputText = " titulo LIKE '%" . $search . "%'";
    }
    if($_POST['searchDate'] != ""){
        $sqlInputDate = " fecha = " . "'$searchDate'";
    }
    if (isset($sqlInputText) != "" && isset($sqlInputDate) != "") {
        $sql = $sql . $sqlInputText . "and" . $sqlInputDate;
    }else{
        if($_POST['search'] != ""){
            $sql = $sql . $sqlInputText;
        }
        if($_POST['searchDate'] != ""){
            $sql = $sql . $sqlInputDate;
        }
    }
}
//se adiciona una clausula order by al final para ordenar la busqueda
$sql = $sql . " ORDER BY idNoticia DESC";
$query = $conectar->query($sql);
$resJson = array();
//guardamos los resultados en un array y se pasan como json al fetch de JS
while ($row = $query->fetch_assoc()) {
    $resJson[] = $row;
}
echo json_encode($resJson);
