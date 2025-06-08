<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <title>BellaVista</title>
    <style>
       .disponibilidad-form{
         margin-top: -50px;
         z-index: 2;
         position: relative;
       }
       @media screen and (max-width: 575px){
         .disponibilidad-form{
           margin-top: 25px;
           padding: 0 35px;
         }
       }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php') ?>

<!-- Swiper -->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper mySwiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_55677.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_62045.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_93127.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_99736.png" class="w-100 d-block"/>
      </div>
    </div>

    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</div>
<!-- Check Avaialibilty Form -->
<div class="container disponibilidad-form">
  <div class="row">
<div class="col-lg-12 bg-white p-4 rounded">
  <h4 class="mb-4">Comprobar Disponibilidad</h4>
  <form>
<div class="row align-items-end">
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Entrada</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Salida</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Adultos</label>
  <select class="form-select shadow-none">
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
</select>
  </div>
  <div class="col-lg-2 mb-3">
  <label class="form-label" style="font-weight: 500">Niños</label>
  <select class="form-select shadow-none">
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
</select>
  </div>
  <div class="col-lg-1 mb-lg-3 mt-2">
<button type="submit" class="btn text-white shadow-none custom-bg">Enviar</button>
  </div>
</div>
  </form>
</div>
  </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">NUESTRAS HABITACIONES</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Nombre de la Habitación Simple</h5>
       <h6 class="mb-5">₹200 Por Noche</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Características</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Habitaciones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Baños</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofás</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Servicios</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Televisión</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Calefacción</span>
       </div>
       <div class="guests mb-4">
         <h6 class="mb-1">Huéspedes</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">5 Adultos</span>
         <span class="badge rounded-pill text-bg-light text-wrap">4 Niños</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Calificación</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar Ahora</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
        </div>
   </div>
   
</div>
</div>
<div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Nombre de la Habitación Simple</h5>
       <h6 class="mb-5">₹200 Por Noche</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Características</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Habitaciones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Baños</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofás</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Servicios</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Televisión</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Calefacción</span>
       </div>
       <div class="guests mb-4">
         <h6 class="mb-1">Huéspedes</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">5 Adultos</span>
         <span class="badge rounded-pill text-bg-light text-wrap">4 Niños</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Calificación</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar Ahora</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
        </div>
   </div>
   </div>
   </div>
   <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Nombre de la Habitación Simple</h5>
       <h6 class="mb-5">₹200 Por Noche</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Características</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Habitaciones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Baños</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcones</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofás</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Servicios</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Televisión</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Calefacción</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Calificación</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar Ahora</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
        </div>
   </div>
   
</div>
</div>
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MÁS HABITACIONES >></a>
    </div>
  </div>
</div>
<!-- NUESTROS SERVICIOS -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">NUESTROS SERVICIOS</h2>
 <div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_43553.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_27079.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_96423.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_49949.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_41622.svg" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MÁS SERVICIOS >></a>
      </div>
  </div>
</div>

<!-- Testimonials -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">OPINIONES</h2>
  <div class="container">

    <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Usuario Aleatorio 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Usuario Aleatorio 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Usuario Aleatorio 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Usuario Aleatorio 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>

     </div>
  <div class="swiper-pagination"></div>
  </div>

  <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MÁS OPINIONES >></a>
      </div>
  </div>

  <!-- Reach Us -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">Sobre Nosotros</h2>
<div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2392.293357535964!2d-0.11749640393531947!3d38.535933272335214!2m3!1f0.8742827035981243!2f33.797362137363656!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1ses!2ses!4v1749403455799!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>

     <div class="col-lg-4 col-md-4">

      <div class="bg-white p-4 rounded mb-4">
        <h4>Contáctanos</h4>
        <a href="tel: +9178943958936" class="d-inline-block mb-2 text-decoration-none text-dark "><i class="bi bi-telephone"></i> +91 78943958936</a><br>
        <a href="tel: +9154539589342" class="d-inline-block mb-2 text-decoration-none text-dark "><i class="bi bi-telephone"></i> +91 54539589342</a>
      </div>

      <div class="bg-white p-4 rounded mb-4">
        <h4>Síguenos</h4>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter"></i> Twitter
          </span>
        </a><br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook"></i> Facebook
          </span>
        </a><br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram"></i> Instagram
          </span>
        </a><br>
      </div>

     </div>
  </div>
</div>

<?php require('inc/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      // Option to navigate
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });


    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
    });
  </script>
</body>
</html>