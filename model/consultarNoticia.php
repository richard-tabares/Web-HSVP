<?php
class consultarNoticia
{
    public function consultarNoticia()
    {
        include_once("db/dbConection.php");
        //creamos coneccion a la bd
        $bd = new conectarBD();
        $conectar = $bd->conectar();


        //sql para guardar la noticia
        $sql = "select * from noticias  order by idNoticia DESC limit 3";
        $res = $conectar->query($sql);
        return $res;
    }
    public function consultarNoticiaAll()
    {
        include_once("db/dbConection.php");
        //creamos coneccion a la bd
        $bd = new conectarBD();
        $conectar = $bd->conectar();


        //sql para guardar la noticia
        $sql = "select * from noticias  order by idNoticia DESC";
        $res = $conectar->query($sql);
        return $res;
    }
    public function verNoticia(){
        include_once("db/dbConection.php");
        //creamos coneccion a la bd
        $bd = new conectarBD();
        $conectar = $bd->conectar();

        //recogemos la consulta
        $id = $_GET['id'];
        
        //sql para guardar la noticia
        $sql = "select * from noticias where idNoticia = " . $id . "";
        $res = $conectar->query($sql);
        $row = $res->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    public function verAdjuntos(){
        $bd = new conectarBD();
        $conectar = $bd->conectar();

        //recogemos la consulta
        $id = $_GET['id'];

        //sql para guardar la noticia
        $sql = "select * from noticiasadjuntos where idNoticia = " . $id . "";
        $res = $conectar->query($sql);
        return $res;
    }
}
