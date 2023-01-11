<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deanjo - Product</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="product.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@700&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Image/deanjo express.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dropdown.css">
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
          <li class="nav-item ">
            <a class="nav-link" href="landinguser.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="sejarahmember.php">History<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
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
  <div class="layar-penuh">
    <header id="home">
      <div class="overlay"></div>
      <img src="image/bannerBackground.jpg" />
      <div style="animation: fadein 2s" class="intro">
        <h1>Product</h1>
      </div>
    </header>

    <main>
      <section id="welcomesection">
        <div class="gallery">
          <div class="content">
            <img src="Image/eco.png">
            <h2>Economic</h2>
            <p>Estimated Time of Arrival:5-14 Days.</p>
			<p>Covarage: Jawa, Bali, Kalimantan, Sumatra, Sulawasi, Batam</p>
            <h6>More Affordable</h6>
          </div>

          <div class="content">
            <img src="Image/regular.png">
            <h2>Regular</h2>
            <p>Estimated Time of Arrival:2-3 Days.</p>
			<p>Covarage: Jawa, Bali, Kalimantan, Sumatra, Sulawasi, Batam</p>
            <h6>Normal Delivery</h6>
          </div>

          <div class="content">
            <img src="Image/xpress.png">
            <h2>Xpress</h2>
            <p>Estimated Time of Arrival:1-2 Days.</p>
			<p>Covarage: Seluruh Pulau Jawa</p>
            <h6>Fast Delivery</h6>
          </div>

          <div class="content">
            <img src="Image/cargo.png">
            <h2>Cargo</h2>
            <p>Estimated Time of Arrival:5-14 Months.</p>
			<p>Covarage: All Indonesia</p>
            <h6>Big Package</h6>
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
</body>

</html>