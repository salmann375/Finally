<?php 
include("config.php");
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['daftar'])){  

	// ambil data dari formulir
	$uname = $_POST['uname'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$status = $_POST['status'];
	$password = md5($_POST['password']);
	$waktu_regis = date("Y-m-d H:i:s");


	// buat query
  $query = mysqli_query($connect, "INSERT INTO akun (uname, nama_lengkap, email, nohp, status, password, waktu_regis) VALUEs ('$uname', '$nama_lengkap', '$email', '$nohp', '$status', '$password', '$waktu_regis')");

	// apakah query simpan berhasil?
		if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: login_user.php?daftar=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: login_user.php?daftar=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

<!-- $_POST/GET is using for sending data to database -->
<!-- isset adalah parameter apakah variabel itu kosong atau tidak -->
<!-- die = exit -->