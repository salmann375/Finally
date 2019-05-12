<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id, judul, tempat ,foto, kategori, subkategori, deskripsi, waktutemu FROM laporan_penemuan WHERE id = $id");
while ($view_lp = mysqli_fetch_array($query)){
	$id_lp = $view_lp['id'];
	$judul = $view_lp['judul'];
	$tempat = $view_lp['tempat'];
	$foto = $view_lp['foto'];
	$kategori = $view_lp['kategori'];
	$subkategori = $view_lp['subkategori'];
	$deskripsi = $view_lp['deskripsi'];
	$waktutemu = $view_lp['waktutemu'];
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
			<th>Tempat</th>
			<th>Foto</th>
			<th>Kategori</th>
			<th>Subkategori</th>
			<th>Deskripsi</th>
			<th>Waktu Ditemukan</th>
		</tr>
	</thead>
	<tbody>
		<?php
			echo "<tr>";

			echo "<td>".$judul."</td>";
			echo "<td>".$tempat."</td>";
			echo "<td>"."<img class='image-style' src=".$foto.">"."</td>";
			echo "<td>".$kategori."</td>";
			echo "<td>".$subkategori."</td>";
			echo "<td>".$deskripsi."</td>";
			echo "<td>".$waktutemu."</td>";
			echo "</tr>";
		?>
	</tbody>