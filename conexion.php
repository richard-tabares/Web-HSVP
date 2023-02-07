<?php
class Cconexion{

    function ConexionBD(){

        $host='SERVERHOSP';
        $dbname='XENCOPRUEBA';
        $username='sa';
        $pasword ='Admin2018';
        $puerto=1433;


        try{
            $conn = new PDO ("sqlsrv:Server=$host;database=$dbname",$username,$pasword);
            echo "Se conectó correctamen a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
        }

        return $conn;
    }
}

?>