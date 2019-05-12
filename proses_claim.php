<?php
session_start();
include("config.php");
date_default_timezone_set('Asia/Jakarta');

	$id = $_POST['id'];	
	$waktu_ambil = $_POST['waktu_ambil'];
	$waktu_klaim = date("Y-m-d H:i:s");
	$uname = $_SESSION['uname'];
	$status = 'belum_selesai';

$query = mysqli_query($connect, "INSERT INTO klaim (waktu_ambil, status, waktu_klaim, uname, id_barang)                                   VALUEs ('$waktu_ambil', '$status', '$waktu_klaim', '$uname', '$id')");
if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	header('Location: homepage.php?claim=berhasil');
} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
	header('Location: homepage.php?claim=gagal');
}
?>