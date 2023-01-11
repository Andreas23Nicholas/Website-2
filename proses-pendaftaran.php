<?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT INTO user (username, password, level) VALUE ('$username', '$password', '$level')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: datauser.php');
    } else {
        header('Location: create.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>