<?php
include ('config.php');

$id = $_GET['id'];
$status = 'deleted';

$query = mysqli_query($connect, "UPDATE laporan_penemuan SET status = '$status' WHERE id =$id");

// apakah query hapus berhasil?
if($query) {
  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
  header('Location: homepage.php?stat=sukses_hapus_lp');
} else {
  // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
  header('Location: homepage.php?stat=gagal_hapus_lp');
}
?>
