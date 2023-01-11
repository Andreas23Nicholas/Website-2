<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "UPDATE user SET username='$username', password='$password', level='$level' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: datauser.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>