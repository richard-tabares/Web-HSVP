<!DOCTYPE html>
<html lang="en">

<head>
  <title>Liga de Usuarios</title>

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
            <li><a href="siau.php">Siau</a></li>
            <li>Liga de Usuarios</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Liga de Usuarios ======= -->
    <section id="ligaU" class="ligaU section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Liga de Usuarios</h2>
        </div>

        <div class="row">
          <div class="col-xl-5 col-lg-6 image-ligaU d-flex justify-content-center align-items-stretch position-relative">
            <!-- <a href="#" class="glightbox play-btn mb-4"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <!-- <h3>Política Pública de Participación</h3> -->
            <h3>¿Qué es la Asociación de Usuarios?</h3>
            <p>
              La Alianza o Asociación de Usuarios es una agrupación de afiliados del régimen contribituvo y subsidiado, del Sistema General de Seguridad Social en Salud, que tienen derechos a utilizar unos servicios de salud, de acuerdo con sus sistema de afiliación, que velarán por la calidad de servicio y la defensa del Usuario
            </p>
            <h3>Requisitos para ser parte de la Asociación</h3>
            <ul>
              <li>Ser usuario del Hospital San Vicente de Paúl de Remedios</li>
              <li>No estar incursos en inhabilidades establecidas por la ley</li>
              <li>No ser empleado de la entidad en salud</li>
              <li>Residir en el municipio de Remedios</li>
            </ul>
            <h3>Mayor Informacion</h3>
            <h4>Correo Electrónico: <a href="mailto:siau@hsvpremedios.gov.co">siau@hsvpremedios.gov.co</a></h4>
          </div>
        </div>

      </div>
    </section><!-- Fin SIAU -->

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