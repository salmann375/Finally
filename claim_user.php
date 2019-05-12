<?php
include("config.php");

$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id FROM laporan_penemuan WHERE id = $id");
while ($claim_lp = mysqli_fetch_array($query)){
	$id = $claim_lp['id'];
	$status = 'claimed';

$query = mysqli_query($connect,"UPDATE laporan_penemuan SET status = '$status' WHERE id ='$id'");
if( $query==TRUE ) {
	header("Location: claim_user_1.php?id=$id");
} else {
	header('Location: claim_user_1.php?claim=gagal');
}

}
?>