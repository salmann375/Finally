<?php
include("config.php");
?>

	<style>
	.image-style{
		width:20vh;
		height:20vh;
	}
	</style>
		
<h1>Laporan Penemuan</h1>
	<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Status</th>
			<th>Waktu Lapor</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, judul, kategori, subkategori, foto, tempat, waktutemu, waktulapor, status FROM laporan_penemuan";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lp = mysqli_fetch_array($query)){
			$id = $lp['id'];
			$loct = $lp['foto'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$lp['judul']."</td>";
			echo "<td>"."<img class='image-style' src=".$loct.">"."</td>";
			echo "<td>".$lp['status']."</td>";
			echo "<td>".$lp['waktulapor']."</td>";
			echo "<td><a href = admin_history_lp.php?id=$id>Lihat</a></td>";
			echo "</tr>";

			}

		?>
