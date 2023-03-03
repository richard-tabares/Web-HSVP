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
  include('../../template/head.php');
  ?>
  <title>Crear Noticia</title>
</head>

<body>

  <div class="grid grid-cols-5">
    <?php
    include('../../template/menu.php');
    ?>
    <!-- div contenedor de la seccion -->
    <div class="bg-gray-100 p-5 col-span-4">
      <!-- mensage de informacion -->
      <div class="msgInfo grid grid-row-2">
        <div class="row-span-1"><i class="fa-solid fa-circle-info fa-2xl pr-5"></i><span class="msg"></span></div>
        <input class="btn-second row-span-1 mt-8" id="cerrarMsg" type="button" value="Cerrar">
      </div>
      <!-- div contenedor del formulario -->
      <div class="contentNews mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5">
        <!-- titulo noticia -->
        <div class="text-2xl font-bold text-center mb-10 mt-10">Crear Noticias</div>
        <!-- formulario crear noticia -->
        <div class="createNews mx-auto">
          <form action="/adminSite/model/crearNoticia.php" id="formNew">
            <table class="w-full">
              <tr>
                <td><input class="inputText w-full" type="text" name="titleNew" placeholder="Título" required></td>
              </tr>
              <tr>
                <td><textarea class="inputText w-full h-32" name="descriptionNew" cols="30" rows="10" placeholder="Descripción" required></textarea></td>
              </tr>
              <tr>
                <td>
                  <label for="imageNew" class="cursor-pointer" id="labelNew">Foto Noticia<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-second"></i></label>
                  <input type="file" name="imageNew" id="imageNew">
                  <label for="attachNewFile" class="cursor-pointer">Archivos Adjuntos<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-second"></i></label>
                  <input type="file" name="attachNewFile" id="attachNewFile" multiple>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="button" value="Guardar" class="btn-primary mr-4" id="btnSaveNew">
                  <input type="button" value="Limpiar" class="btn-second" id="btnResetNews">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include('../../template/plugins.php');
  ?>
</body>

</html>