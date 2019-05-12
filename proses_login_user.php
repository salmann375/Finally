<?php
session_start();

include("config.php");

$uname = $_POST['uname'];
$password = md5($_POST['password']);

$data = mysqli_query($connect,"SELECT * FROM akun WHERE uname='$uname' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['uname'] = $uname;
	$_SESSION['status'] = "login";
	header("location:homepage.php?uname=$uname");
} else{
	header("location:login_user.php?login=gagal");
}
?>