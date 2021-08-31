<?php
session_start();
 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$query = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location: admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>