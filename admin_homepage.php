<?php
include("config.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Finally | Homepage</title>		
	<style>
	.image-style{
		width:20vh;
		height:20vh;
	}
	</style>								<!-- title tuh buat judul tabnya -->
</head>					
<body>
Hai Selamat Datang
<fieldset>
Daftar Laporan :<br>
<a href="admin_lk.php">Laporan Kehilangan</a><br>
<a href="admin_lp.php">Laporan Penemuan</a><br>
<a href="admin_barang.php">Barang</a><br>
<a href="admin_pengambilan.php">Pengambilan</a><br>
Profil :<br>
<a href="admin_logout.php">Logout</a>	
<br>

<h2>Klaim Barang</h2>
<form>
<table border="1">
	<thead>
		<tr>
			<th>ID Claim</th>
			<th>Waktu Ambil</th>
			<th>Claimer</th>
			<th>ID Barang</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, waktu_ambil, uname, id_barang FROM klaim WHERE status = 'belum_selesai'";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($cl = mysqli_fetch_array($query)){
			$id = $cl['id'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$cl['waktu_ambil']."</td>";
			echo "<td>".$cl['uname']."</td>";
			echo "<td>".$cl['id_barang']."</td>";
			echo "<td><a = href= admin_finished.php?id=$id>Finished</a></td>";
			echo "</tr>";

			}

		?>
	</tbody>
</form>
</table>

<h2>Laporan Penemuan</h2>
<form action="admin_accept.php" method="POST">
	<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Tempat Ditemukan</th>
			<th>Waktu Ditemukan</th>
			<th>Pelapor</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, judul, kategori, subkategori, foto, tempat, waktutemu, uname FROM laporan_penemuan WHERE status='reported'";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lp = mysqli_fetch_array($query)){
			$id = $lp['id'];
			$loct = $lp['foto'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$lp['judul']."</td>";
			echo "<td>"."<img class='image-style' src=".$loct.">"."</td>";
			echo "<td>".$lp['tempat']."</td>";
			echo "<td>".$lp['waktutemu']."</td>";
			echo "<td>".$lp['uname']."</td>";
			echo "<td><a href = admin_lp_view.php?id=$id>Lihat</a>"." "."<a href = admin_accept.php?id=$id>Diterima</a></td>";
			echo "</tr>";

			}

		?>
</form>
</fieldset>
</body>
</html>