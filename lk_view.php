<?php
session_start();
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id, judul, foto, kategori, subkategori, deskripsi, waktuhilang, uname FROM laporan_kehilangan WHERE id = $id");
while ($view_lk = mysqli_fetch_array($query)){
	$id_lk = $view_lk['id'];
	$judul = $view_lk['judul'];
	$foto = $view_lk['foto'];
	$kategori = $view_lk['kategori'];
	$subkategori = $view_lk['subkategori'];
	$deskripsi = $view_lk['deskripsi'];
	$waktuhilang = $view_lk['waktuhilang'];
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

<table border="1">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Foto</th>
			<th>Kategori</th>
			<th>Subkategori</th>
			<th>Deskripsi</th>
			<th>Waktu Hilang</th>
		</tr>
	</thead>
	<tbody>
	<?php
			echo "<tr>";

			echo "<td>".$judul."</td>";
			echo "<td>"."<img class='image-style' src=".$foto.">"."</td>";
			echo "<td>".$kategori."</td>";
			echo "<td>".$subkategori."</td>";
			echo "<td>".$deskripsi."</td>";
			echo "<td>".$waktuhilang."</td>";
			echo "</tr>";
	?>
	</tbody>