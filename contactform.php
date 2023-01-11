<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deanjo - Create</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="create.css" />
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
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li class="nav-item active">
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
  <main>
  <div class="layar-penuh">
    <header id="home">
      <div class="intro">
        <img style="animation: fadein1 2.1s;" src="Image/deanjo express.jpg">
      </div>
      <section class="about">
        <div class="main" style="animation: fadein 2s;">
            <body>
            <?php if(isset($_GET['status'])): ?>
                <p>
                 <?php
                    if($_GET['status'] == 'gagal'){
                        echo "Pendaftaran gagal!";
                     }
                 ?>
                </p>
            <?php endif; ?>
                <form action="proses-contact.php" method="POST">
                    <fieldset>
                    <label for="name">Name</label><br>
                    <input class="box1" type="text" name="name" id="name" placeholder="Enter your Name" required="required"><br>
                    <label for="email">Email</label><br>
                    <input class="box1" type="text" name="email" id="email" placeholder="Enter your Email" required="required"><br>
                    <label for="notelp">Phone Number</label><br>
                    <input class="box1" type="text" name="notelp" id="notelp" placeholder="Enter your Phone Number" required="required"><br>
                    <label for="address">Address</label><br>
                    <input class="box1" type="text" name="address" id="address" placeholder="Enter your Address" required="required"><br>
                    <div class="div1">
                        <label for="city">City</label><br>
                        <input class="box2" type="text" name="city" id="city" placeholder="Enter your City" required="required"><br>
                    </div>
                    <div class="div1">
                        <label for="code">Post Code</label><br>
                        <input class="box2" type="text" name="code" id="code" placeholder="Enter your Post Code" required="required"><br>
                    </div>
                    <br>
                    <label for="address">Message</label><br>
                    <input class="box1" type="text" name="message" id="address" placeholder="Enter your Address" required="required"><br>
					</div>
                    <div class="form-group">
						<input type="submit" class="form-control btn btn-primary" value="Submit" name="submit">
					</div>
					<div class="form-group">
						<a href="landinguser.php"><input type="button" class="form-control btn btn-danger" value="Cancel"></a>
					</div>
                    </fieldset>
                </form>
            </body>
        </div>
    </section>
    </header>
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