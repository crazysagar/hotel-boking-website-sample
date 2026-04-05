<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EoS Hotel-Home</title>
  <?php require('inc/links.php') ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <style>
    .avilability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .avilability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php') ?>
  <!-- Corausel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper swiper-container">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" class="w-100 rounded">
                </div>

                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa" class="w-100 rounded">
                </div>

                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" class="w-100 rounded">
                </div>

                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461" class="w-100 rounded">
                </div>

                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427" class="w-100 rounded">
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- check avilability form -->

  <div class="container avilability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Avilability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-In</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>

          </div>
      </div>
      </form>
    </div>
  </div>
  </div>


  <!--Our Rooms -->

  <h2 class="mt-5 pt-5 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a" class="card-img-top" alt="Hotel Room">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">₹2000 per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">

              <h6 class="mb-1">Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
            </div>
            <div class="guests mb-4">

              <h6 class="mb-1">Guests</h6>

              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children </span>
            </div>
            <div class="rating mb-4">

              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>

              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a" class="card-img-top" alt="Hotel Room">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">₹2000 per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">

              <h6 class="mb-1">Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
            </div>
            <div class="guests mb-4">

              <h6 class="mb-1">Guests</h6>

              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children </span>
            </div>
            <div class="rating mb-4">

              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>

              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a" class="card-img-top" alt="Hotel Room">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">₹2000 per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">

              <h6 class="mb-1">Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
            </div>
            
            <div class="rating mb-4">

              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>

              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5 my-3">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">More Rooms>>></a>

      </div>

    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-5 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="#" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="#" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="#" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="#" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="#" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">More Facilities >>></a>
      </div>

    </div>
  </div>

  <!-- Our Testimonials -->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">OUR TESTIMONIALS</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile p-4">

            <div class="d-flex align-items-center mb-3">
              <img src="#" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Iusto debitis nisi, quo expedita quae, quia quidem.
            </p>

            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile p-4">

            <div class="d-flex align-items-center">
              <img src="#" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Iusto debitis nisi, quo expedita quae, quia quidem.
            </p>

            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile p-4">

            <div class="d-flex align-items-center">
              <img src="#" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Iusto debitis nisi, quo expedita quae, quia quidem.
            </p>

            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>

          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none"> Know More >>></a>
    </div>
  </div>

  <!-- Reach Us -->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.5927675167786!2d85.291006!3d27.700597499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18609488cdb7%3A0x44edd8fc9a17af63!2sThe%20Soaltee%20Kathmandu%2C%20Autograph%20Collection!5e1!3m2!1sen!2snp!4v1775287943344!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 mb-4 rounded">
          <h5>Call Us</h5>
          <a href="tel: +9779816235740" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i> +9779816235740</a>
          <br>
          <a href="tel: +014273999" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i> +014273999</a>

        </div>

        <div class="bg-white p-4 mb-4 rounded">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>



        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php') ?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,

      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000,
      },
    });
  </script>
</body>

</html>