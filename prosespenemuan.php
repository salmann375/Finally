<?php 
session_start();
include("config.php");
date_default_timezone_set('Asia/Jakarta');

	// ambil data dari formulir
	$judul = $_POST['judul'];
	$tempat = $_POST['tempat'];
	$kategori = $_POST['kategori'];
	$subkategori = $_POST['subkategori'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$waktutemu = $_POST['waktutemu'];
	$waktulapor = date("Y-m-d H:i");
	$status = 'reported';
	$uname = $_SESSION['uname'];
	
$path = "laporan/penemuan/".$foto;
move_uploaded_file($tmp, $path);

$quer = "INSERT INTO laporan_penemuan (judul, tempat, kategori, subkategori, deskripsi, foto, waktutemu, waktulapor, status, uname) VALUEs ('$judul', '$tempat' ,'$kategori', '$subkategori', '$deskripsi', '$path', '$waktutemu', '$waktulapor', '$status', '$uname')";
$query = mysqli_query($connect, $quer);
	// apakah query simpan berhasil?
if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	header('Location: homepage.php?lp=sukses');
} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
	header('Location: homepage.php?lp=gagal');
}
