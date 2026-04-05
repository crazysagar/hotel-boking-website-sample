<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EoS Hotel-Contact</title>
  <?php require('inc/links.php') ?>
  <style>
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="h-font fw-bold text-center">Contact Us</h2>
    <div class="h-line bg-dark"></div>

    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Incidunt totam veniam magni, adipisci quam quo
    </p>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 ">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.5927675167786!2d85.291006!3d27.700597499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18609488cdb7%3A0x44edd8fc9a17af63!2sThe%20Soaltee%20Kathmandu%2C%20Autograph%20Collection!5e1!3m2!1sen!2snp!4v1775287943344!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/3hS31HUFRtsAm6Uc9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>P72R+6CR, Tahachal Marg, Kathmandu 44600</a>

          <h5 mt-4>Call Us</h5>
          <a href="tel: +9779816235740" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i> +9779816235740</a>
          <br>
          <a href="tel: +014273999" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i> +014273999</a>

          <h5 class="mt4">Email</h5>
          <a href="mailto: ask.eoswebdev@gmail.com" class="d-inline-block text-decoration-none mb-2 text-dark">
            <i class="bi bi-envelope-fill"></i> ask.eoswebdev@gmail.com
          </a>

          <h5 mt-4>Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 ">
            <i class="bi bi-twitter me-1"></i>
          </a>


        </div>
      </div>
      <div class="col-lg-6 col-md-6  px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>

        </div>
      </div>
    </div>
  </div>
  <?php require('inc/footer.php') ?>
</body>

</html>