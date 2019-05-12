<?php 
include("config.php");
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['daftar'])){  

	// ambil data dari formulir
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$jenis = $_FILES['foto']['type'];
	$password = md5($_POST['password']);
	$waktu_daftar = date("Y-m-d H:i:s");

$path = "admin/foto/".$foto;
move_uploaded_file($tmp, $path);


	// buat query
  $query = mysqli_query($connect, "INSERT INTO petugas (username, nama, no_ktp, nohp, alamat, foto, password, waktu_daftar) VALUEs ('$username', '$nama', '$no_ktp', '$nohp', '$alamat', '$path', '$password', '$waktu_daftar')");

	// apakah query simpan berhasil?
		if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: admin_login.php?daftar=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: admin_login.php?daftar=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

<!-- $_POST/GET is using for sending data to database -->
<!-- isset adalah parameter apakah variabel itu kosong atau tidak -->
<!-- die = exit -->