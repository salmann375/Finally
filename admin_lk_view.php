<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id, judul, foto, kategori, subkategori, deskripsi, waktuhilang, waktulapor, status, uname FROM laporan_kehilangan WHERE id = $id");
while ($view_lk = mysqli_fetch_array($query)){
	$id = $view_lk['id'];
	$judul = $view_lk['judul'];
	$foto = $view_lk['foto'];
	$kategori = $view_lk['kategori'];
	$subkategori = $view_lk['subkategori'];
	$deskripsi = $view_lk['deskripsi'];
	$waktuhilang = $view_lk['waktuhilang'];
	$waktulapor = $view_lk['waktulapor'];
	$status = $view_lk['status'];
	$uname = $view_lk['uname'];
}
?>
	<style>
	.image-style{
		width:20vh;
		height:20vh;
	}
	</style>		
<h3><?php echo $judul ?></h3>
<form action="admin_accept.php" method="POST"/>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Kategori</th>
			<th>Subkategori</th>
			<th>Deskripsi</th>
			<th>Waktu Hilang</th>
			<th>Waktu Lapor</th>
			<th>Status</th>
			<th>Pelapor</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php
			echo "<td>".$id."</td>";
			echo "<td>".$judul."</td>";
			echo "<td>"."<img class='image-style' src=".$foto.">"."</td>";
			echo "<td>".$kategori."</td>";
			echo "<td>".$subkategori."</td>";
			echo "<td>".$deskripsi."</td>";
			echo "<td>".$waktuhilang."</td>";
			echo "<td>".$waktulapor."</td>";
			echo "<td>".$status."</td>";
			echo "<td>".$uname."</td>";
		?>

	</tr>
	</form>
	</tbody>
	</form>