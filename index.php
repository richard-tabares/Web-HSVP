<?php
include_once('model/consultarNoticia.php');
$consultar = new consultarNoticia();
$res = $consultar->consultarNoticia();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hospital San Vicente de Paúl de Remedios</title>

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

  <!-- ======= Inicio ======= -->
  <section id="inicio" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenidos</h1>
      <h2>Somos una institución que trabaja con el corazón</h2>
      <a href="#porque" class="btn-get-started scrollto">Comencemos</a>
    </div>
  </section><!-- FIN Inicio -->

  <main id="main">

    <!-- ======= PORQUE ELEGIRNOS ======= -->
    <section id="porque" class="porque">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>¿Porque Elegirnos?</h3>
              <p>
                Porque somos son Institución de Primer nivel de atencion, comprometida con la salud de todos nuestros pacientes, contamos con personal administrativo y profesional idóneo para velar por tu bienestar y el de tu familia. Entendemos la salud como un estado de completo bienestar físico, mental y social, por ello trabajamos diariamente en la prevención de tu enfermedad
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-person-heart"></i>
                    <h4>Calidad Humana</h4>
                    <p>Nuestro personal siempre está comprometido con el buen trato hacia nuestros usuarios</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-hospital-fill"></i>
                    <h4>Atención Oportuna</h4>
                    <p>Trabajamos constantemente en el mejoramiento continuo para brindarte una atencion con de calidad</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-heart-pulse-fill"></i>
                    <h4>Comprometidos con la Salud</h4>
                    <p>Estamos comprometidos con el cuidado de la salud y la vida de nuestros usuarios y familias</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- FIN PORQUE ELEGIRNOS -->

    <!-- ======= NOSOTROS ======= -->
    <section id="nosotros" class="nosotros">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <!-- <a href="#" class="glightbox play-btn mb-4"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Hospital San Vicente de Paúl de Remedios</h3>
            <p>La Empresa Social del Estado Hospital San Vicente de Paúl es una entidad prestadora de servicios de salud de primer nivel, con calidad y eficiencia, previniendo las enfermedades, promoviendo y recuperando la salud; para ello cuenta con personal idóneo y comprometido de forma integral; satisfaciendo las necesidades y expectativas de la salud de los habitantes de Remedios, nordeste antioqueño y todo quien lo necesite</p>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-fingerprint"></i></div>
              <h4 class="title"><a href="">Responsabilidad Social</a></h4>
              <p class="description">Oportunidades para la atención de todos los ciudadanos</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-heart-pulse"></i></div>
              <h4 class="title"><a href="">Transparencia</a></h4>
              <p class="description">Imagen clara y confiable de la gestión administrativa.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-hospital"></i></div>
              <h4 class="title"><a href="">Calidad</a></h4>
              <p class="description">Atención efectiva, oportuna y personalizada, de acuerdo con los estándares técnicos, administrativos y normas vigentes sobre los servicios de salud ofrecidos</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- Fin Nosotros -->

    <!-- ======= CONTADORES ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p>Medicos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departamentos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laboratorio</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
              <p>Servicios</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Fin Contadores -->


    <!-- ======= Noticias ======= -->
    <section id="noticias" class="noticias">
      <div class="containter">
        <div class="section-title">
          <h2>Noticias</h2>
        </div>
        <div class="container">
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
      </div>
    </section>
    <!-- Fin Contadores -->



    <!-- ======= Servicios ======= -->
    <!-- <section id="servicios" class="servicios">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>La E.S.E. Se encuentra en la búsqueda de la más alta calidad en el servicio que brinda a sus usuarios, resulta tan esencial para el crecimiento y la supervivencia, a largo plazo, de la institución, como el control de costos, la eficacia y la efectividad</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-doctor"></i></div>
              <h4><a href="">Consulta Externa</a></h4>
              <p>Se cuenta con personal médico y de enfermería, quienes brindan atención médica general y de enfermería en programas tales como: Control prenatal con enfoque de riesgo, puerperio, Hipertensión Arterial, Infecciones de Transmisión Sexual, Salud Integral para la Infancia, Tuberculosis, Planificación Familiar, etc.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-bed"></i></div>
              <h4><a href="">Hospitalización</a></h4>
              <p>El servicio se presta por médico general y personal de enfermería, en este se brinda una atención al paciente mediante la valoración diagnóstica, manejo clínico y exámenes de laboratorio necesarios hasta su mejoría y en última instancia hasta la remisión a un nivel de atención superior
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital"></i></div>
              <h4><a href="">Urgencias</a></h4>
              <p>Se atienden urgencias, por médico general y personal de enfermería, quienes brindan la atención inicial al paciente, estabilización, resolución o remisión del mismo</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-ambulance"></i></div>
              <h4><a href="">Traslado Asistencial Básico</a></h4>
              <p>Se cuenta con el servicio de ambulancia para el transporte de pacientes a otros niveles de atención, las 24 horas del día</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-tooth"></i></div>
              <h4><a href="">Odontología General</a></h4>
              <p>Se cuenta con dos Odontólogos y dos Higienista oral, quienes realizan atención odontológica, actividades de promoción en la salud oral y prevención de la enfermedad</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
              <h4><a href="">Fisioterapia</a></h4>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-circle-radiation"></i></div>
              <h4><a href="">Rayos X</a></h4>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>


        </div>

      </div>
    </section> -->
    <!-- Fin Servicios -->

    <!-- ======= Departamentos ======= -->
    <section id="servicios" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>La E.S.E. Se encuentra en la búsqueda de la más alta calidad en el servicio que brinda a sus usuarios, resulta tan esencial para el crecimiento y la supervivencia, a largo plazo, de la institución, como el control de costos, la eficacia y la efectividad</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Consulta Externa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Hospitalización</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Urgencias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Traslado Asistencial Básico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Odontología General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Vacunación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Citología </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Radiología</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Psicología</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Fisioterapia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Servicios Extramurales</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Consulta Externa</h3>
                    <p>Se cuenta con personal médico y de enfermería, quienes brindan atención médica general y de enfermería en programas tales como: Control prenatal con enfoque de riesgo, puerperio, Hipertensión Arterial, Infecciones de Transmisión Sexual, Salud Integral para la Infancia, Tuberculosis, Planificación Familiar, etc.</p>

                    <h5>Horarios de atención:</h5>
                    <p>Lunes a Jueves: 7 am - 12 m y 1 pm - 5 pm
                      <br>Viernes: 7 am - 12 m y 1 pm - 4 pm
                    </p>

                    <h5>Teléfono citas Hospital San Vicente de Paúl de Remedios:</h5>
                    <p>Celular: 315 814 4152 - 300 252 1853
                      <br>Lunes a Viernes: 1 pm - 3 pm
                    </p>

                    <h5>Teléfono citas Centro de Salud la Cruzada:</h5>
                    <p>Celular: 3217815559
                      <br>Lunes a Viernes: 1 pm - 3 pm
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hospitalización</h3>
                    <p>El servicio se presta por médico general y personal de enfermería, en este se brinda una atención al paciente mediante la valoración diagnóstica, manejo clínico y exámenes de laboratorio necesarios hasta su mejoría y en última instancia hasta la remisión a un nivel de atención superior</p>

                    <h5>Horarios de atención:</h5>
                    <p>Lunes a Domingo: 24 horas</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Urgencias</h3>
                    <p>Se atienden urgencias, por médico general y personal de enfermería, quienes brindan la atención inicial al paciente, estabilización, resolución o remisión del mismo</p>

                    <h5>Horarios de atención:</h5>
                    <p>Lunes a Domingo: 24 horas</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Traslado Asistencial Básico</h3>
                    <p>Se cuenta con el servicio de ambulancia para el transporte de pacientes a otros niveles de atención, las 24 horas del día</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Odontología General</h3>
                    <p>Se cuenta con dos Odontólogos y dos Higienista oral, quienes realizan atención odontológica, actividades de promoción en la salud oral y prevención de la enfermedad</p>

                    <h5>Horarios de atención:</h5>
                    <p>Lunes a Jueves: 7 am - 12 m y 1 pm - 5 pm
                      <br>Viernes: 7 am - 12 m y 1 pm - 4 pm
                    </p>

                    <h5>Teléfonos para Citas:</h5>
                    <p>Celular: 313 635 8557
                      <br>Martes y Viernes: 7 am - 8 am
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Vacunación </h3>
                    <p>Se encuentran habilitadas dos módulos para manejo de esquema PAI y COVID-19, contamos con personal para servicios de vacunación extramural que realiza captación de usuarios y aplicación de biológico casa-casa</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Citología</h3>
                    <p>Contamos con servicio diario de toma de muestras de citología</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Radiología</h3>
                    <p>Cotamos con un equipo de última tecnología a cargo de un tecnólogo en radiología, habilitado servicios de urgencias 24/7 y servicio de consulta externa</p>

                    <h5>Horarios de atención consulta externa:</h5>
                    <p>Lunes a Viernes: 7 am - 1 pm</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Psicología</h3>
                    <p>Brindamos servicio de psicoterapia en horario habitual de consulta externa</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-10">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fisioterapia</h3>
                    <p>El funcionamiento de fisioterapia lo brindamos en nuestra sede corregimiento la cruzada, donde se cuenta con un lugar acondicionado para la prestación del servicio en horario habilitual de consulta externa</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-11">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Servicios Extramurales</h3>
                    <p>En coordinación con Secretaría de Salud y Bienestar Social del municipio se realizan visitas a las zonas rurales dispersas tipo brigadas de salud donde se desplaza el equipo integral de salud para la atención de la comunidad</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-12">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Services/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Fin Departmentos -->


    <!-- ======= Preguntas Frecuentes ======= -->
    <!-- <section id="acor" class="acor section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas Frecuentes</h2>
        </div>

        <div class="acor-list">
          <ul>
            <li data-aos="fade-up">
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#acor-list-1">Non consectetur a erat nam at lectus urna duis?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
              <div id="acor-list-1" class="collapse show" data-bs-parent=".acor-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#acor-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
              <div id="acor-list-2" class="collapse" data-bs-parent=".acor-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <a data-bs-toggle="collapse" data-bs-target="#acor-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
              <div id="acor-list-3" class="collapse" data-bs-parent=".acor-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a data-bs-toggle="collapse" data-bs-target="#acor-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
              <div id="acor-list-4" class="collapse" data-bs-parent=".acor-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#acor-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
              <div id="acor-list-5" class="collapse" data-bs-parent=".acor-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> -->
    <!-- Fin Preguntas Frecuentes -->

    <!-- ======= Galeria ======= -->
    <!-- <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galería</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- Fin Galeria -->

  </main><!-- Fin #main -->

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