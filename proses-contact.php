<?php

include("koneksi.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $code = $_POST['code'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, notelp, address, city, code, message) VALUE ('$name', '$email', '$notelp', '$address', '$city', '$code', '$message')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: contactform.php');
    } else {
        header('Location: contactform.php');
    }


} else {
    die("Akses dilarang...");
}

?>