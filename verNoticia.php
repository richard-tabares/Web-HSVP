<?php
include('model/consultarNoticia.php');
$consultar = new consultarNoticia();
$row = $consultar->verNoticia();
$adjuntos = $consultar->verAdjuntos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Noticias</title>

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
            <li><a href="noticias.php">Noticias</a></li>
            <li><?php echo $row['titulo'] ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Noticias ======= -->
    <section id="verNoticia" class="verNoticia section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php echo $row['titulo'] ?></h2>
          <p class="fecha-noticia">Fecha de publicación: <?php echo $row['fecha'] ?></p>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-6 image-verNoticia d-flex justify-content-center align-items-stretch position-relative" style="background: url('<?php echo $row['fotoNoticia'] ?>') center center no-repeat">
              <!-- <a href="#" class="glightbox play-btn mb-4"></a> -->
            </div>

            <div class="col-xl-7 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <!-- <h3>Política Pública de Participación</h3> -->
              <p><?php echo $row['descripcion'] ?></p>
            </div>
        </div>
      </div>
    </section><!-- Fin Noticias -->

      <!-- ======= ADJUNTOS ======= -->
      <section class="verNoticia section-bg">
        <div class="container">
            <ul>
              <?php while ($row = $adjuntos->fetch_array(MYSQLI_ASSOC)) { ?>
                <a href="<?php echo $row['ruta'] ?>" target="_blank">
                  <li>
                    <h3><?php echo $row['nombre'] ?></h3><i class="bi bi-file-arrow-down icon-link"></i>
                  </li>
                </a>
              <?php } ?><!-- Fin del WHILE -->
            </ul>
        </div>
      </section>
      <!-- ======= Fin ADJUNTOS ======= -->


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