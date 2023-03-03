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
    include('../template/head.php');
    ?>
    <title>Dashboard</title>
</head>

<body>
    <div class="contentDash grid grid-cols-5">

        <?php
        include('../template/menu.php');
        ?>

        <div class="bg-gray-100 p-5 col-span-4">
            <div class="contentNews mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5">
                <div class="searchNews mt-5 mb-10 grid grid-cols-3">
                    <input class="inputText col-span-2" type="text" name="search" id="search" placeholder="Buscar...">
                    <input class="h-10 rounded text-right pr-3 col-span-1" type="date" name="date" id="search">
                </div>
                <div class="listNews">
                    <div class="titleNews p-5 bg-gray-200 rounded-t grid grid-cols-2">
                        <span class="cols-auto text-2xl font-bold">Noticias</span>
                        <span class="cols-auto text-right">
                            <a href="noticias/"><i class="fa-solid fa-circle-plus text-primary fa-2xl cursor-pointer hover:text-gray-500"></i></a>
                        </span>
                    </div>
                    <table class="w-full">
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:border-t hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Brigada de Salud Lejanías</td>
                            <td class="texto-recortado">La Hospital San Vicente de Paul - Remedios la Alcaldía Municipal a través Secretaría de Salud, le informa a la comunidad de la vereda lejanías que los días 16-17-18 de febrero, estaremos brindand La Hospital San Vicente de Paul - Remedios la Alcaldía Municipal a través Secretaría de Salud, le informa a la comunidad de la vereda lejanías que los días 16-17-18 de febrero, estaremos brindand La Hospital San Vicente de Paul - Remedios la Alcaldía Municipal a través Secretaría de Salud, le informa a la comunidad de la vereda lejanías que los días 16-17-18 de febrero, estaremos brindand
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>
                        <tr class="border-b hover:border-gray-300 hover:shadow-md cursor-pointer" data-key="">
                            <td class="">Vacunación Casa a Casa</td>
                            <td>¡Ponte al día con tus vacunas; vacunación casa a casa en el barrio Buenos Aires!
                            <td><i class="fa-solid fa-trash-can hover:bg-red-200"></i></td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>
    <?php
    include('../template/plugins.php');
    ?>
</body>

</html>