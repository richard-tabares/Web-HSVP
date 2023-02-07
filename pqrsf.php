<!DOCTYPE html>
<html lang="en">

<head>
  <title>PQRSF</title>

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
            <li>PQRSF</li>
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

    <section class="pqrsf section-bg">
      <div class="container">
        <div class="section-title">
          <h2 id="resp">Registrar PQRSF</h2>
        </div>
        <form id="formPqrsf" method="post" class="pqrsf-form needs-validation was-validate">
          <div class="row">
            <div class="col-md-6">
              <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres" autofocus required>
            </div>
            <div class="col-md-6">
              <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <select class="form-select" name="tipoDocumento" id="tipoDocumento" required>
                <option selected disabled value="">Seleccione tipo documento</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de Extranjería</option>
              </select>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="documento" id="documento" placeholder="Documento" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo Eléctronico" required>
            </div>
            <div class="col-md-3">
              <select class="form-select" name="genero" id="genero" required>
                <option selected disabled value="">Seleccione su genero</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="barrio" id="barrio" placeholder="Barrio" required>
            </div>
            <div class="col-md-2">
              <select class="form-select" name="dpto" id="dpto" required>
                <option value="" selected disabled>Seleccione Departamento</option>
                <option value="Antioquia">Antioquia</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-select" name="municipio" id="municipio" required>
                <option value="" selected disabled>Seleccione Municipio</option>
                <option value="Remedios">Remedios</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-select" name="eps" id="eps" required>
                <option selected disabled value="">Seleccione su EPS</option>
                <option value="Nueva EPS">Nueva EPS</option>
                <option value="AIC">AIC</option>
                <option value="Sura EPS">Sura EPS</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <select class="form-select" name="tipoProceso" id="tipoProceso" required>
                <option selected disabled value="">Seleccione tipo de proceso</option>
                <option value="P">Petición</option>
                <option value="Q">Queja</option>
                <option value="R">Reclamo</option>
                <option value="S">Sugerencia</option>
                <option value="F">Felicitaciones</option>
              </select>
            </div>
            <div class="col-md-4">
              <select class="form-select" name="area" id="area" required>
                <option selected disabled value="">Seleccione Area</option>
                <option value="Administración">Administración</option>
                <option value="Consulta Externa">Consulta Externa</option>
                <option value="Farmacia">Farmacia</option>
                <option value="Promoción y Prevención">Promoción y Prevención</option>
                <option value="Rayos X">Rayos X</option>
                <option value="Laboratorio">Laboratorio</option>
                <option value="Urgencias">Urgencias</option>
                <option value="Hospitalización">Hospitalización</option>
                <option value="Facturación">Facturación</option>
                <option value="Admisiones">Admisiones</option>
              </select>
            </div>
            <div class="col-md-4">
              <select class="form-select" name="alcance" id="alcance" required>
                <option selected disabled value="">Seleccione Alcance</option>
                <option value="A toda area o dependencia">A toda area o dependencia</option>
                <option value="A un funcionario en especifico">A un funcionario en especifico</option>
                <option value="A un gremio del área">A un gremio del área</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Descripción" required></textarea>
            </div>
          </div>
          <div class="row">
            <div id="aceptoInfo">
              <p>Al <strong>enviar</strong> este formularios certifico que el correo electrónico ingresado en mis datos personales se encuentra vigente, de igual manera autorizo a la E.S.E. Hospital San Vicente de Paúl de Remedios, Antioquia, para que, de ser necesario, me contácten por este medio.</p>
            </div>
          </div>
          <div class="row">
            <div>
              <button class="btn btn-secondary" type="reset">Cancelar</button>
              <button id="enviarPqrsf" class="btn btn-success enviar-btn" type="button" onClick="enviarpqrsf()">Enviar</button>
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
  <!-- <script>
    // Desactiva el submit si hay campos invalidos
    (function() {
      'use strict'

      // Lista todos los formularios que queremos aplicar la validacion de bootstrap
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script> -->
</body>

</html>