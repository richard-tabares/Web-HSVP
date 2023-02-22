<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $jsonData = json_decode(file_get_contents('php://input'));
    $user = $jsonData->user;
    $pass = $jsonData->pass;
    $query = $conectar->query("select usuario,contrasena from usuarios where usuario = '$user' and contrasena = '$pass'");
    $cont = mysqli_num_rows($query);
    
    if ($cont == 1) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        echo json_encode('true');
    } else {
        echo json_encode('false');
    }
}else{
    echo "error la recibir los datos";
}
?>