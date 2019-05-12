<?php
include("config.php");
date_default_timezone_set('Asia/Jakarta');

	// ambil data dari formulir
	$id = $_POST['id_lp'];
	$judul = $_POST['judul'];
	$tempat = $_POST['tempat'];
	$kategori = $_POST['kategori'];
	$subkategori = $_POST['subkategori'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$waktutemu = $_POST['waktutemu'];


$path = "laporan/penemuan/".$foto;
move_uploaded_file($tmp, $path);

if($foto != ""){
	$query = mysqli_query($connect,"UPDATE laporan_penemuan SET judul = '$judul', tempat = '$tempat', kategori ='$kategori', 
	subkategori = '$subkategori', deskripsi = '$deskripsi', foto = '$path', waktutemu = '$waktutemu' WHERE id =$id");
	if( $query==TRUE ) {
		header('Location: homepage.php?edit_lp=sukses');
	} else {
		header('Location: homepage.php?edit_lp=gagal');
	}
} else {
  	$query = mysqli_query($connect,"UPDATE laporan_penemuan SET judul = '$judul', tempat = '$tempat', kategori ='$kategori', 
  	subkategori = '$subkategori', deskripsi = '$deskripsi', waktutemu = '$waktutemu' WHERE id =$id");
	if( $query==TRUE ) {
		header('Location: homepage.php?edit_lp=sukses');
	} else {
		header('Location: homepage.php?edit_lp=gagal');
	}
}
?>