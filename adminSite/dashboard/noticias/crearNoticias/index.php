<?php
session_start();
if (!(isset($_SESSION['user']))) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../../template/head.php');
  ?>
  <title>Crear Noticia</title>
</head>

<body>

  <div class="contentDash grid grid-cols-5 max-lg:grid-cols-10 max-lg:text-[0.6rem] max-xl:text-[0.7rem] max-2xl:text-[1rem]">
    <?php
    include('../../../template/menu.php');
    ?>
    <!-- div contenedor de la seccion -->
    <div class="bg-gray-100 max-lg:h-screen p-5 col-span-4 max-md:col-span-10 max-lg:col-span-9">
      <!-- mensage de informacion -->
      <div class="msgInfo grid grid-row-3">
        <div class="row-span-1"><i class="fa-solid fa-circle-info fa-3x mb-5"></i></div>
        <div class="row-span-1"><span class="msg row-span-1"></span></div>
        <div class="row-span-1"><input class="btn-primary row-span-1 mt-5" id="cerrarMsg" type="button" value="Cerrar"></div>
      </div>
      <!-- div contenedor del formulario -->
      <div class="mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5 pb-10">
        <!-- titulo noticia -->
        <div class="text-2xl font-bold text-center mb-10 mt-10">Crear Noticias</div>
        <!-- formulario crear noticia -->
        <div class="createNews mx-auto">
          <form action="/adminSite/model/crearNoticia.php" id="formNew">
            <table class="w-full mb-10">
              <tr>
                <td><input class="inputText w-full" type="text" name="titleNew" placeholder="Título" required></td>
              </tr>
              <tr>
                <td><textarea class="inputText w-full h-32" name="descriptionNew" cols="30" rows="10" placeholder="Descripción" required></textarea></td>
              </tr>
              <tr>
                <td>
                  <label for="imageNew" class="cursor-pointer" id="labelNew">Foto Noticia<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-[#f0bc74]"></i></label>
                  <input type="file" name="imageNew" id="imageNew">
                  <label for="attachNewFile" class="cursor-pointer">Archivos Adjuntos<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-[#f0bc74]"></i></label>
                  <input type="file" name="attachNewFile" id="attachNewFile" multiple>
                </td>
              </tr>
              </table>
              <span value="Guardar" class="btn-primary ml-2 mr-4" id="btnSaveNew"><i class="fa-solid fa-floppy-disk pr-2"></i>Guardar</span>
              <span value="Limpiar" class="btn-second" id="btnResetNews">Limpiar</span>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include('../../../template/plugins.php');
  ?>
</body>

</html>