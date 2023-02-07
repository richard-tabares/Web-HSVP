<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crear Noticia</title>

  <!-- Head -->
  <?php
  include('template/head.php');
  ?>
  <!-- Fin Head -->
</head>

<body>

  <!-- Menu superior -->
  <?php
  include('template/menu.php');
  ?>
  <!-- Fin Menu -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li>Crear Noticia</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- Mensaje de confirmacion -->
    <div style="background: red;" aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
      <div class="position-fixed top-50 start-50 translate-middle" style="z-index: 11">
        <div id="mensajePqrsf" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header" style="background: #1977cc;color:#fff;">
            <strong class="me-auto">Información</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            PQRSF enviada exitosamente!
            <div class="mt-2 pt-2 border-top">
              <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="toast">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Crear noticia -->
    <section class="pqrsf section-bg">
      <div class="container">
        <div class="section-title">
          <h2 id="resp">Crear Noticia</h2>
        </div>
        <form id="formPqrsf" method="post" action="model/crearNoticia.php" class="pqrsf-form needs-validation was-validate" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <input type="text" name="titNoticia" class="form-control" id="titNoticia" placeholder="Título de la Noticia" autofocus required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <textarea class="form-control" name="desNoticia" id="desNoticia" rows="5" placeholder="Descripción" style="white-space: pre-line;" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Seleccione Imagen de la Noticia: 
            <input class="" name="fotoNoticia" id="fotoNoticia" type="file" required>
            </div>
            <div class="col-md-12">
              Seleccione Archivos Adjuntos: 
            <input class="" name="adjunto[]" id="adjunto[]" type="file" multiple="">
            </div>
          </div>
          <div class="row">
            <div>
              <button class="btn btn-secondary" type="reset">Cancelar</button>
              <button id="enviarPqrsf" class="btn btn-success enviar-btn" type="submit" onClick="enviarpqrsf()">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Footer -->
  <?php
  include('template/footer.php');
  ?>
  <!-- Fin Footer -->

  <!-- Plugins -->
  <?php
  include('template/plugins.php');
  ?>
  <!-- Fin Plugins -->
</body>

</html>