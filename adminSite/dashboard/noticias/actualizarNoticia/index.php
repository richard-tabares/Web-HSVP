<!-- mensage de informacion -->
<div class="msgInfo grid grid-row-3">
  <div class="row-span-1"><i class="fa-solid fa-circle-info fa-3x mb-5"></i></div>
  <div class="row-span-1"><span class="msg row-span-1"></span></div>
  <div class="row-span-1"><input class="btn-second row-span-1 mt-5" id="cerrarMsg" type="button" value="Cerrar" onClick="cerrarMsg()"></div>
</div>
<!-- div contenedor del formulario -->
<div class="mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5 pb-10">
  <!-- titulo noticia -->
  <div class="text-2xl font-bold text-center mb-10 mt-10">Actualizar Noticia</div>
  <!-- formulario crear noticia -->
  <div class="createNews mx-auto">
    <form action="/adminSite/model/crearNoticia.php" id="formNew">
      <table class="w-full" id="updateNews" data-keyNews="">
        <tr>
          <td><input class="inputText w-full" type="text" name="titleNew" placeholder="Título" required></td>
        </tr>
        <tr>
          <td><textarea class="inputText w-full h-32" name="descriptionNew" cols="30" rows="10" placeholder="Descripción" required></textarea></td>
        </tr>
      </table>
      <div class="text-xl font-bold text-center mb-10 mt-10">Archivos Adjuntos</div>
      <table class="w-full mb-12" id="attach"></table>
      <table class="mb-10">
        <tr>
          <td>
            <label for="imageNew" class="cursor-pointer" id="labelNew">Foto Noticia<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-[#f0bc74]"></i></label>
            <input type="file" name="imageNew" id="imageNew">
            <label for="attachNewFile" class="cursor-pointer">Archivos Adjuntos<i class="fa-solid fa-circle-plus fa-lg p-3 text-primary hover:text-[#f0bc74]"></i></label>
            <input type="file" name="attachNewFile" id="attachNewFile" multiple>
          </td>
        </tr>
      </table>
      <span class="btn-primary ml-2 mb-10" id="btnUpdateNews" onClick="updateNews()"><i class="fa-solid fa-floppy-disk pr-2"></i>Actualizar</span>
    </form>
  </div>
</div>