<?php
include("config.php");
date_default_timezone_set('Asia/Jakarta');

	// ambil data dari formulir
	$id = $_POST['id_lk'];
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$subkategori = $_POST['subkategori'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$waktuhilang = $_POST['waktuhilang'];


$path = "laporan/kehilangan/".$foto;
move_uploaded_file($tmp, $path);

if($foto != ""){
	$query = mysqli_query($connect,"UPDATE laporan_kehilangan SET judul = '$judul', kategori ='$kategori', 
	subkategori = '$subkategori', deskripsi = '$deskripsi', foto = '$path', waktuhilang = '$waktuhilang' WHERE id =$id");
	if( $query==TRUE ) {
		header('Location: homepage.php?edit_lk=sukses');
	} else {
		header('Location: homepage.php?edit_lk=gagal');
	}
} else {
  	$query = mysqli_query($connect,"UPDATE laporan_kehilangan SET judul = '$judul', kategori ='$kategori', 
  	subkategori = '$subkategori', deskripsi = '$deskripsi', waktuhilang = '$waktuhilang' WHERE id =$id");
	if( $query==TRUE ) {
		header('Location: homepage.php?edit_lk=sukses');
	} else {
		header('Location: homepage.php?edit_lk=gagal');
	}
}
?>