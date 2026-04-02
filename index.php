<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime Hotel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">
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
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Anime hotel</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>


  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <form>
          <div class="modal-header">
            <h4 class="modal-title fs-5 d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h4>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="javascript: void(0) " class="text-secondary text-decoration-none">Forgot Pssword?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title fs-5 d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Register
            </h4>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must be matched with your ID (Citizenship card, Passport, Driving License, etc.).
              It is required during your Check-In and Check-Out.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="Password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">Register</button>

            </div>
            <!-- <div class="mb-3">
              
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <a href="javascript: void(0) " class="text-secondary text-decoration-none">Forgot Pssword?</a>
            </div> -->
          </div>
        </form>
      </div>
    </div>
  </div>


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
  <div class="container">

    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper">

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
  </div>
  <br><br><br>
  <br><br><br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
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