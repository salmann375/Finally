<?php
session_start();
include("config.php");
date_default_timezone_set('Asia/Jakarta');
	
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id, id_barang FROM klaim WHERE id = $id");
while ($klaim = mysqli_fetch_array($query)){
	$id = $klaim['id'];
	$waktu = date("Y-m-d H:i:s");
	$username = $_SESSION['username'];
	$status = 'selesai';
	$id_barang = $klaim['id_barang'];
	$status_barang = 'sudah_diambil';

$query = mysqli_query($connect,"UPDATE klaim SET status = '$status' WHERE id ='$id'");

$query = mysqli_query($connect,"UPDATE barang SET status = '$status_barang' WHERE id ='$id_barang'");

$query = mysqli_query($connect, "INSERT INTO pengambilan (waktu, uname_petugas, id_klaim) VALUEs ('$waktu', '$username', '$id')");
if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	header('Location: admin_homepage.php?pengambilan=berhasil');
} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
	header('Location: admin_homepage.php?pengambilan=gagal');
}
}
?>