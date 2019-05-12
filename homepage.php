<?php
session_start();
include("config.php");
$aktif = $_SESSION['uname'];
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
	</style>				<!-- title tuh buat judul tabnya -->
</head>					
<body>
Hai Selamat Datang
<fieldset>
Pencarian:<br>
<form  method="post" action="search.php"> 
<input  type="text" name="search"> 
<input  type="submit" name="submit" value="Search">
</form> 
Tambah Laporan :<br>
<a href="laporan_kehilangan.php">Laporan Kehilangan</a><br>
<a href="laporan_penemuan.php">Laporan Penemuan</a><br>
Profil :<br>
<a href="logout_user.php">Logout</a>	
<br>

<h2>Laporan Kehilangan</h2>
	<table border="1">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Foto</th>
			<th>Waktu Hilang</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, judul, kategori, subkategori, foto, waktuhilang, uname FROM laporan_kehilangan WHERE status='reported'";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lk = mysqli_fetch_array($query)){
			$id = $lk['id'];
			$loc = $lk['foto'];
			$uname = $lk['uname'];
			echo "<tr>";

			echo "<td>".$lk['judul']."</td>";
			echo "<td>"."<img class='image-style' src=".$loc.">"."</td>";
			echo "<td>".$lk['waktuhilang']."</td>";
			if ($uname == $_SESSION['uname']){
				echo "<td><a href = lk_view.php?id=$id>Lihat</a>"." "."<a href = lk_formedit.php?id=$id>Edit</a> "."<a href = lk_delete.php?id=$id>Hapus</td>";
			} else {
				echo "<td><a href = lk_view.php?id=$id>Lihat</a></td>";
			}
			echo "</tr>";
 
			}

		?>

	</tbody>
	</table>
<h2>Laporan Penemuan</h2>
	<table border="1">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Foto</th>
			<th>Tempat Ditemukan</th>
			<th>Waktu Ditemukan</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$quer = "SELECT id, judul, kategori, subkategori, foto, tempat, waktutemu, uname FROM laporan_penemuan WHERE status='accepted'";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lp = mysqli_fetch_array($query)){
			$id = $lp['id'];
			$loct = $lp['foto'];
			$uname = $lp['uname'];
			echo "<tr>";

			echo "<td>".$lp['judul']."</td>";
			echo "<td>"."<img class='image-style' src=".$loct.">"."</td>";
			echo "<td>".$lp['tempat']."</td>";
			echo "<td>".$lp['waktutemu']."</td>";
			if ($uname == $_SESSION['uname']){
				echo "<td><a href = lp_view.php?id=$id>Lihat</a></td>";
			} else{
				echo "<td><a href = lp_view.php?id=$id>Lihat</a> <a href = claim_user.php?id=$id>Claim</a></td>";
			}
			echo "</tr>";
			}
		$quer = "SELECT id, judul, kategori, subkategori, foto, tempat, waktutemu, uname FROM laporan_penemuan WHERE status='reported'";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($lp = mysqli_fetch_array($query)){
			$id = $lp['id'];
			$loct = $lp['foto'];
			$uname = $lp['uname']; 
			if ($uname == $_SESSION['uname']){
				echo "<tr>";
			
				echo "<td>".$lp['judul']."</td>";
				echo "<td>"."<img class='image-style' src=".$loct.">"."</td>";
				echo "<td>".$lp['tempat']."</td>";
				echo "<td>".$lp['waktutemu']."</td>";
				echo "<td><a href = lp_view.php?id=$id>Lihat</a> <a href = lp_formedit.php?id=$id>Edit</a> <a href = lp_delete.php?id=$id>Hapus</a></td>";

				echo "</tr>";
			} else {}
		}

		?>

</fieldset>
</body>
</html>