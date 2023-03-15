<?php
session_start();
if (!(isset($_SESSION['user']))) {
    header('location: ../../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include('../../template/head.php');
    ?>
    <title>Noticias</title>
</head>

<body class="bg-gray-100">
    <div class="contentDash grid grid-cols-5 max-lg:grid-cols-10 max-lg:text-[0.6rem] max-xl:text-[0.7rem] max-2xl:text-[1rem]">

        <?php
        include('../../template/menu.php');
        ?>

        <div class="contentNews bg-gray-100 max-lg:h-screen p-5 col-span-4 max-md:col-span-10 max-lg:col-span-9">
            <div class="msgInfo grid grid-row-3 z-10">
                <div class="row-span-1"><i class="fa-solid fa-circle-info fa-3x mb-5"></i></div>
                <div class="row-span-1"><span class="msg row-span-1"></span></div>
                <div class="row-span-1"><input class="btn-second row-span-1 mt-5" id="cerrarMsg" type="button" value="Cerrar"></div>
            </div>
            <div class="mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5">
                <div class="searchNews mt-5 mb-10 flex justify-between items-center">
                    <div class="flex-auto relative">
                        <i class="fa-solid fa-magnifying-glass fa-lg absolute top-1/2 left-2"></i>
                        <input class="inputSearch w-full p" type="text" id="search" placeholder="Buscar...">
                    </div>
                    <div class="text-right flex-auto">
                    <i class="fa-regular fa-calendar-days fa-lg pr-3" id="btnDate"></i><input class="inputSearchDate h-10 rounded text-right pr-3" type="date">
                    </div>

                </div>
                <div class="listNews">
                    <div class="titleNews p-5 bg-gray-200 rounded-t flex justify-between items-center mb-5">
                        <div class="text-2xl font-bold border" id="btnNoticias">Noticias</div>
                        <div class="h-auto text-right justify-center items-center border">
                            <a href="crearNoticias/">
                                <span class="bg-primary px-5 py-3 m-0 rounded-md text-gray-200 hover:bg-second"><i class="fa-solid fa-circle-plus text-gray-200 fa-lg pr-2"></i>Nueva Noticia</span>
                            </a>
                        </div>
                    </div>
                    <table class="w-full" id="news">
                    </table>
                </div>
            </div>

        </div>
    </div>
    <?php
    include('../../template/plugins.php');
    ?>
</body>

</html>