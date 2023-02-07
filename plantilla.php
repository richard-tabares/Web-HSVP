<!DOCTYPE html>
<html lang="en">

<head>
  <title>Plantilla</title>

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
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Inner Page</h2>
        </div>
        <p>
          Example inner page template
        </p>
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