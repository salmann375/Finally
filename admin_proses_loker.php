<?php
session_start();
include("config.php");
date_default_timezone_set('Asia/Jakarta');

	$id = $_POST['id'];	
	$loker = $_POST['loker'];
	$waktu_diterima = date("Y-m-d H:i:s");
	$penerima = $_SESSION['username'];
	$status = 'ada';

$query = mysqli_query($connect, "INSERT INTO barang (status, loker, waktu_diterima, id_lp, penerima)                                     VALUEs ('$status', '$loker', '$waktu_diterima', '$id', '$penerima')");
if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	header('Location: admin_homepage.php?barang=diterima');
} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
	header('Location: admin_loker.php?barang=ditolak');
}
