<?php
include('model/consultarNoticia.php');
$consultar = new consultarNoticia();
$res = $consultar->consultarNoticiaAll();
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
            <li><a href="index.html">Inicio</a></li>
            <li>Noticias</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="noticias section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Noticias</h2>
        </div>

        <div class="row">

          <?php while ($row = $res->fetch_array(MYSQLI_ASSOC)) { ?>

            <div class="card-noticia col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="content-box">
                <a href="verNoticia.php?id=<?php echo $row['idNoticia'] ?>">
                  <div class="image-noticia" style="background: url('<?php echo $row['fotoNoticia'] ?>') center center no-repeat; min-height: 200px;"></div>
                </a>
                <h4><a href="verNoticia.php?id=<?php echo $row['idNoticia'] ?>"><?php echo $row['titulo'] ?></a></h4>
                <p><?php echo substr($row['descripcion'], 0, 200) ?> ...</p>
                <a href="verNoticia.php?id=<?php echo $row['idNoticia'] ?>">Leer mas</a>
                <hr>
                <p class="fecha-noticia">Fecha de publicación: <?php echo $row['fecha'] ?></p>
              </div>
            </div>

          <?php } ?>

        </div>
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