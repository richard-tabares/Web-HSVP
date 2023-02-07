<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion de PHP con SQL Server</title>
</head>

<body>
    <?php
    include("conexion.php");
    $db = new Cconexion();
    $conn = $db->ConexionBD();

    $sql = "select * from txusuarios";
    foreach($conn->query($sql) as $row){
        echo $row['UX_COD'] . ' - ' . $row['UX_NOM'] . '<br>';
    }

    /* $serverName = "SERVERHOSP\sqlexpress"; //serverName\instanceName
    $connectionInfo = array("Database" => "XENCOPRUEBA", "UID" => "sa", "PWD" => "Admin2018");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if ($conn) {
        echo "Conexión establecida.<br />";
    } else {
        echo "Conexión no se pudo establecer.<br />";
        die(print_r(sqlsrv_errors(), true));
    } */
    ?>
</body>

</html>