<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deanjo - Contact Info</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@700&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Image/deanjo express.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="contactinfo.css">
    <link rel="stylesheet" href="transition.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="image/deanjo express.jpg" width="50" height="30" alt=""></a>
      <button id="burgerbar" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="landinguser.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="sejarahmember.php">History<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li class="nav-item ">
              <div class="dropdown">
                  <a class="nav-link" id="contact" href="">Contact Us <span class="sr-only">(current) </span><span><i class="fa fa-caret-down"></i></span></a> 
                  <div class="dropdown-item">
                      <a class="nav-link" href="contactinfo.php">Contact Info</a>
                      <a class="nav-link" href="contactform.php">Contact Form</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ceklogout.php"><b>Logout Member<span class="sr-only">(current)</span></b></a>
          </li>
        </ul>
      </div>
    </div>
    </nav>

  <div style="animation: fadein1 2s" class="googlemaps">
    <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63460.56945270203!2d106.62229637910157!3d-6.226025799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdee841bfc3%3A0x873ac50f7969399c!2sBunda%20Mulia%20University%20Campus%20Serpong!5e0!3m2!1sen!2sid!4v1649152353797!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <main>
    <section id="welcomesection">
      <div style="animation: fadein 2s" class="layar-dalam"> <h1>Contact Us</h1></div>
      <div class="gallery">
        <div class="content">
          <img src="Image/fotoandre.jpg">
          <h2>Andreas Nicholas</h2>
          <p>NIM : 32200085</p>
    <p>No Telp : 08123456789</p>
          <h6>Email : andreas@gmail.com</h6>
        </div>

        <div class="content">
          <img src="Image/fotodennis.jpg">
          <h2>Dennis Anggara</h2>
          <p>Nim : 32200093</p>
    <p>No Telp : 085674838475</p>
          <h6>Email : dnns@gmail.com</h6>
        </div>

        <div class="content">
          <img src="Image/fotojoshua.jpg">
          <h2>Joshua Pavell.T</h2>
          <p>Nim : 32200087</p>
    <p>No Telp : 081293859385</p>
          <h6>Email : Joshuasenja@gmail.com</h6>
        </div>

        
      </div>
    </section>
  </main>
<footer id="contact">
    <div class="layar-dalam">
      <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:48px"></i></div>
          <div class="text">
              <h3>Address</h3>
              <p>Universitas Bunda Mulia <br>Tangerang, Indonesia<br>15111</p>
          </div>
      </div>
      <div class="box">
          <div class="icon"><i class="fa fa-phone" aria-hidden="true" style="font-size:48px"></i></div>
          <div class="text">
              <h3>Phone</h3>
              <p>021 8455 8088</p>
          </div>
      </div>
      <div class="box">
          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:48px"></i></div>
          <div class="text">
              <h3>Email</h3>
              <p>deanjo@gmail.co.id</p>
          </div>
      </div>
  </div>
    <div class="layar-dalam">
      <div class="copyright">&copy; 2022 Deanjo Universitas Bunda Mulia</div>
    </div>
  </footer>
</div>
  <script src="dist/js/jquery-3.5.1.min.js"></script>
  <script src="dist/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/holder.min.js"></script>
  <style>
  </style>

</body>
</html>