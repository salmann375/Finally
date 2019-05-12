<?php
include("config.php");
?>

	<style>
	.image-style{
		width:20vh;
		height:20vh;
	}
	</style>	
	
<h1>Laporan Kehilangan</h1>
	<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Waktu Hilang</th>
			<th>Pelapor</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, judul, kategori, subkategori, foto, waktuhilang, uname FROM laporan_kehilangan";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lk = mysqli_fetch_array($query)){
			$id = $lk['id'];
			$loc = $lk['foto'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$lk['judul']."</td>";
			echo "<td>"."<img class='image-style' src=".$loc.">"."</td>";
			echo "<td>".$lk['waktuhilang']."</td>";
			echo "<td>".$lk['uname']."</td>";
			echo "<td><a href = admin_lk_view.php?id=$id>Lihat</a></td>";
			echo "</tr>";
 
			}

		?>

	</tbody>
	</table>