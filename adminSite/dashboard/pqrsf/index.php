<?php
session_start();
if (!(isset($_SESSION['user']))) {
    header('location: ../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../../template/head.php');
    ?>
    <title>PQRSF</title>
</head>

<body class="bg-gray-100">
    <div class="contentDash grid grid-cols-5 max-lg:grid-cols-10 max-lg:text-[0.6rem] max-xl:text-[0.7rem] max-2xl:text-[1rem]">
        <?php
        include('../../template/menu.php');
        ?>
        <div class="contentPqrsf col-span-4 p-5 bg-gray-100 max-lg:h-screen max-md:col-span-10 max-lg:col-span-9">
            <div class="z-10 grid msgInfo grid-row-3">
                <div class="row-span-1"><i class="mb-5 fa-solid fa-circle-info fa-3x"></i></div>
                <div class="row-span-1"><span class="row-span-1 msg"></span></div>
                <div class="row-span-1"><input class="row-span-1 mt-5 btn-second" id="cerrarMsg" type="button" value="Cerrar"></div>
            </div>
            <div class="w-full h-auto p-5 mx-auto text-gray-600 bg-white rounded-lg shadow">
            <div class="text-2xl font-bold text-center mb-10 mt-10">PQRSF</div>
                <div class="flex items-center justify-between mt-5 mb-10">
                    <div class="relative flex-auto">
                        <select class="inputSelect" name="typePqrsf" id="typePqrsf">
                            <option class="bg-white" value="" disabled selected>Tipo de PQRSF</option>
                            <option class="bg-white" value="P">Petición</option>
                            <option class="bg-white" value="Q">Queja</option>
                            <option class="bg-white" value="R">Reclamo</option>
                            <option class="bg-white" value="S">Solicitud</option>
                            <option class="bg-white" value="F">Felicitación</option>
                            <option class="bg-white" value="">Todos</option>
                        </select>
                    </div>
                    <div class="relative flex-auto">
                        <select class="inputSelect p-0" name="statePqrsf" id="statePqrsf">
                            <option class="bg-white" value="" disabled selected>Seleccion Estado</option>
                            <option class="bg-white" value="Pendiente">Pendiente</option>
                            <option class="bg-white" value="Resuelto">Resuelto</option>
                            <option class="bg-white" value="">Todos</option>
                        </select>
                    </div>
                    <div class="flex-auto text-right">
                        <i class="pr-3 fa-regular fa-calendar-days fa-lg" id="btnDate"></i><input class="inputs border-none h-10 pr-3 text-right rounded" type="date" id="datePqrsf">
                    </div>
                </div>
                <div class="listPQRSF">

                    <table class="w-full" id="pqrsf">
                        
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