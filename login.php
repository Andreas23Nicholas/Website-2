<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Login - Deanjo</title>
</head>
<body>
    <div class="container">
        <h4 class="text-center">Login</h4>
        <form action="ceklogin.php" method="post">
            <hr>
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username">     
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">     
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" > Remember Me
                </label>
            </div>
            <button type="submit" value="LOGIN" class="btn btn-primary">Login</button><br>
            <?php 
            if(isset($_GET['pesan'])){
              if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
              }
            }
            ?>
        </form>
    </div>
</body>
</html>