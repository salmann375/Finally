<?php
include("config.php");

$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id FROM laporan_penemuan WHERE id = $id");
while ($accept_lp = mysqli_fetch_array($query)){
	$id_lp = $accept_lp['id'];
	$status = 'accepted';

$query = mysqli_query($connect,"UPDATE laporan_penemuan SET status = '$status' WHERE id ='$id_lp'");
if( $query==TRUE ) {
	header("Location: admin_loker.php?id=$id_lp");
} else {
	header('Location: admin_homepage.php?accept=gagal');
}

}
?>