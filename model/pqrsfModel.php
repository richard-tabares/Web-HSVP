<?php
include_once("../db/dbConection.php");
//creamos coneccion a la bd
$bd = new conectarBD();
$conectar = $bd->conectar();
//recibimos variables
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipoDocumento = $_POST['tipoDocumento'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$dpto = $_POST['dpto'];
$municipio = $_POST['municipio'];
$eps = $_POST['eps'];
$tipoProceso = $_POST['tipoProceso'];
$area = $_POST['area'];
$alcance = $_POST['alcance'];
$descripcion = $_POST['descripcion'];
$radicado = "";
$fecha = date('Y-m-d');
$estado = "Pendiente";
//echo $nombres;

 if (isset($_POST['tipoProceso'])) {
    switch ($_POST['tipoProceso']) {
        case "P":
            $var_tipotraido = "Petición";
            break;
        case "Q":
            $var_tipotraido = "Queja";
            break;
        case "R":
            $var_tipotraido = "Reclamo";
            break;
        case "S":
            $var_tipotraido = "Solicitud";
            break;
        case "F":
            $var_tipotraido = "Felicitación";
            break;
    }

    //echo ($var_tipotraido);
} 
//guardamos los datos de la PQRSF
$sql = "insert into pqrs (tipoDocumento,numeroDocumento,nombres,apellidos,telefono,correo,sexo,direccion,barrio,departamento,municipio,eps,tipoProceso,area,alcance,descripcion,radicado,fecha,estado) values ('" . $tipoDocumento . "'," . $documento . ",'" . $nombres . "','" . $apellidos . "'," . $telefono . ",'" . $correo . "','" . $genero . "','" . $direccion . "','" . $barrio . "','" . $dpto . "','" . $municipio . "','" . $eps . "','" . $tipoProceso . "','" . $area . "','" . $alcance . "','" . $descripcion . "','" . $radicado . "','" . $fecha . "','" . $estado . "')";
$conectar->query($sql);
//consultamos el ultimo registro ingresado
$sql = "select MAX(idpqrsf) as id from pqrs";
$res = $conectar->query($sql);
$id = $res->fetch_array(MYSQLI_ASSOC);
//generamos radicado
$radicado = "RD" . $tipoProceso . $id['id'];
//actualizamos el radicado
$sql = "update pqrs set radicado='" . $radicado . "' where idpqrsf=" . $id['id'] . "";
$conectar->query($sql);

//mandamos correo con la informacion del radicado
$para = "siau@hsvpremedios.gov.co";
$asunto = "PQRSF Radicada numero " . $radicado;
$Mensaje = "
                  <h1>Información General de la PQRSF</h1>
                  <p>
                    <b>Nombre y Apellidos: </b>" . $nombres . " " . $apellidos . "
                  </p>
                  <p>
                    <b>Tipo de Documento: </b>" . $tipoDocumento . "
                  </p>
                  <p>
                    <b>Número de Documento: </b>" . $documento . "
                  </p>
                  <p>
                    <b>Correo Electrónico: </b>" . $correo . "
                  </p>
                  <p>
                    <b>Género: </b>" . $genero . "
                  </p>
                  <p>
                    <b>Dirección: </b>" . $direccion . "
                  </p>
                  <p>
                    <b>EPS: </b>" . $eps . "
                  </p>
                  <p>
                    <b>Tipo de Proceso: </b>" . $tipoProceso . "
                  </p>
                  <p>
                    <b>Área: </b>" . $area . "
                  </p>
                  <p>
                    <b>Alcance: </b>" . $alcance . "
                  </p>
                  <p>
                    <b>Mensaje: </b>" . $descripcion . "
                  </p>";
$headers = "From: pqrs@hsvpremedios.gov.co" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= "CC: richardtabaresb.hsvp@gmail.com";
//mail($para, $asunto, $Mensaje, $headers);
