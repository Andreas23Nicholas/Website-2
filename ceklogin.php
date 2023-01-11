<?php 
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $get = mysqli_fetch_array($data);
    $level = $get['level'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
    if($level == "admin"){
        header("location:landingadmin.php");
    } elseif ($level == 'member'){
        header("location:landinguser.php");
    }
}else{
	header("location:login.php?pesan=gagal");
}
?>