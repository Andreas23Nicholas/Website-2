<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deanjo - Datauser</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="sejarah.css" />
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
            <a class="nav-link" href="landingadmin.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="datauser.php">Data User <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pesan.php">Pesan<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ceklogout.php"><b>Logout Admin<span class="sr-only">(current)</span></b></a>
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
            <div class="about-text">
                <h1>Data User</h1>
                  <div class="col-md-12 bg-white p-4">
			            <a href="create.php"><button class="btn btn-primary mb-3">Create Data</button></a>
			            <table class="table table-responsive table-hover table-stripped">
				            <thead>
					            <tr class="table-info">
                        <th width="5%">ID</th>
						            <th width="25%">Username</th>
						            <th width="15%">Created</th>
					            	<th width="15%">Level</th>
					            	<th width="20%">Action</th>
					            </tr>
				            </thead>
				            <tbody>
                    <?php
                    include 'koneksi.php';

                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($koneksi, $sql);

                    while($user = mysqli_fetch_array($query)){
                       echo "<tr>";

                       echo "<td>".$user['id']."</td>";
                       echo "<td>".$user['username']."</td>";
                       echo "<td>".$user['created']."</td>";
                       echo "<td>".$user['level']."</td>";

                       echo "<td>";
                       echo "<a href='form-edit.php?id=".$user['id']."'>Edit</a> | ";
                       echo "<a href='hapus.php?id=".$user['id']."'>Hapus</a>";
                       echo "</td>";

                       echo "</tr>";
                      }
                    ?>
			            	</tbody>
			            </table>
		            </div>
            </div>
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