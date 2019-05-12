<?php
session_start();

include("config.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($connect,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin_homepage.php?username=$username");
} else{
	header("location:admin_login.php?login=gagal");
}
?>