<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EoS Hotel-About</title>
  <?php require('inc/links.php') ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <style>
    .box:hover {
      border-top-color: var(--teal) !important;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="h-font fw-bokd text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>

    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Incidunt totam veniam magni, adipisci quam quo
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-item-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Ab perspiciatis, id nam ipsa neque vero.
        </p>
      </div>

      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=500&h=300&fit=crop&crop=faces"
          style="width:100%; max-width:400px; height:auto;">
      </div>

    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.flaticon.com/512/139/139899.png" width="70">
          <h4 class="mt-3">100+ ROOMS</h4>

        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" width="70">
          <h4 class="mt-3">200+ CUSTOMERS</h4>

        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" width="70">
          <h4 class="mt-3">150+ REVIEWS</h4>

        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.flaticon.com/512/921/921347.png" width="70">
          <h4 class="mt-3">150+ STAFFS</h4>
        </div>
      </div>

    </div>
  </div>

  <h3 class="fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=300&fit=crop&crop=faces" class="w-100">
          <h5 class="mt-2">John Carter</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=300&fit=crop&crop=faces" class="w-100">
          <h5 class="mt-2">Emma Watson</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=300&fit=crop&crop=faces" class="w-100">
          <h5 class="mt-2">Michael Lee</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=300&fit=crop&crop=faces" class="w-100">
          <h5 class="mt-2">Sophia Brown</h5>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('inc/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
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
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>