//creamos una coneccion con js
function objetoAjax() {
  var xmlhttp = false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
function toast() {
  /* var mensajePqrsf = document.getElementById('mensajePqrsf')
  var toast = new bootstrap.Toast(mensajePqrsf)
  toast.show() */
}
//enviar PQRSF
function enviarpqrsf() {
  var nombres = document.getElementById("nombres").value;
  var apellidos = document.getElementById("apellidos").value;
  var tipoDocumento = document.getElementById("tipoDocumento").value;
  var documento = document.getElementById("documento").value;
  var telefono = document.getElementById("telefono").value;
  var correo = document.getElementById("correo").value;
  var genero = document.getElementById("genero").value;
  var direccion = document.getElementById("direccion").value;
  var barrio = document.getElementById("barrio").value;
  var dpto = document.getElementById("dpto").value;
  var municipio = document.getElementById("municipio").value;
  var eps = document.getElementById("eps").value;
  var tipoProceso = document.getElementById("tipoProceso").value;
  var area = document.getElementById("area").value;
  var alcance = document.getElementById("alcance").value;
  var descripcion = document.getElementById("descripcion").value;
  var formulario = document.getElementById("formPqrsf");
  var i = 0;
  var camposValidados = 0;
  var mensajePqrsf = document.getElementById("mensajePqrsf");
  var toast = new bootstrap.Toast(mensajePqrsf);
  formulario.classList.add("was-validated");
  //se validan los campos del formulario
  while (formulario[i].value != "") {
    //contamos campos validos
    camposValidados += 1;
    i++;
  }
  //cuando los campos sean validados guarda la info
  if (camposValidados == formulario.length - 2) {
    //instaciamos objeto ajax para la coneccion asincronica
    ajaxPqrsf = objetoAjax();
    //indicamos metodo,accion
    ajaxPqrsf.open("POST", "model/pqrsfModel.php", true);
    //cuando el objeto XMLHttpRequest cambia de estado, la funcion se inicia
    ajaxPqrsf.onreadystatechange = function () {
      //la funcion responseText tiene todos los datos pedidos al servidor
      if (ajaxPqrsf.readyState == 4 && ajaxPqrsf.status == 200) {
        //mostrar mensaje de confirmacion
        formulario.reset();
        formulario.classList.remove("was-validated");
        toast.show();
      }
    };
    ajaxPqrsf.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded"
    );
    //enviando los datos para que guarden los datos
    ajaxPqrsf.send(
      "nombres=" +
      nombres +
      "&apellidos=" +
      apellidos +
      "&tipoDocumento=" +
      tipoDocumento +
      "&documento=" +
      documento +
      "&telefono=" +
      telefono +
      "&correo=" +
      correo +
      "&genero=" +
      genero +
      "&direccion=" +
      direccion +
      "&barrio=" +
      barrio +
      "&dpto=" +
      dpto +
      "&municipio=" +
      municipio +
      "&eps=" +
      eps +
      "&tipoProceso=" +
      tipoProceso +
      "&area=" +
      area +
      "&alcance=" +
      alcance +
      "&descripcion=" +
      descripcion
    );
  }
}
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 100;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
  };

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select("#header");
  let selectTopbar = select("#topbar");
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add("header-scrolled");
        if (selectTopbar) {
          selectTopbar.classList.add("topbar-scrolled");
        }
      } else {
        selectHeader.classList.remove("header-scrolled");
        if (selectTopbar) {
          selectTopbar.classList.remove("topbar-scrolled");
        }
      }
    };
    window.addEventListener("load", headerScrolled);
    onscroll(document, headerScrolled);
  }

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Initiate Gallery Lightbox
   */
  const galelryLightbox = GLightbox({
    selector: ".galelry-lightbox",
  });

  /**
   * Testimonials slider
   */
  /* new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
    delay: 5000,
    disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
    },
    breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
  
    1200: {
      slidesPerView: 2,
      spaceBetween: 20
    }
    }
  }); */
})();
