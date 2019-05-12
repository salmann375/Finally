<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id, judul, kategori, subkategori, deskripsi, waktuhilang, foto FROM laporan_kehilangan WHERE id = $id");
while ($edit_lk = mysqli_fetch_array($query)){
	$id_lk = $edit_lk['id'];
	$judul = $edit_lk['judul'];
	$kategori = $edit_lk['kategori'];
	$subkategori = $edit_lk['subkategori'];
	$deskripsi = $edit_lk['deskripsi'];
	$waktuhilang = $edit_lk['waktuhilang'];
	$foto = $edit_lk['foto'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Finally | Edit Laporan Kehilangan</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Laporan</h3>
	</header>

	<form action="lk_prosesedit.php" method="POST" enctype="multipart/form-data">
		<table>
				<input type ="hidden" name="id_lk" value="<?php echo $id_lk;?>"/></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="varchar" name="judul" placeholder="Handphone Nokia 3610" value="<?php echo $judul;?>" required autofocus></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
				<select name="kategori" required>
				<?php
				if ($kategori == "alat_elektronik") {
					echo "<option value='alat_elektronik' selected>Alat Elektronik</option>";
				} else {
					echo "<option value='alat_elektronik'>Alat Elektronik</option>";
				}
				if ($kategori == "perlengkapan_kuliah") {
					echo "<option value='perlengkapan_kuliah' selected>Perlengkapan Kuliah</option>";
				} else {
					echo "<option value='perlengkapan kuliah'>Perlengkapan Kuliah</option>";
				}
				if ($kategori == "lainnya") {
					echo "<option value='lainnya' selected>Lainnya</option>";
				} else {
					echo "<option value='lainnya'>Lainnya</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Subkategori</td>
				<td>:</td>
				<td>
				<select name="subkategori" required>
				<?php
				if ($subkategori == "adaptor") {
					echo "<option value='adaptor' selected>Adaptor</option>";
				} else {
					echo "<option value='adaptor'>Adaptor</option>";
				}
				if ($subkategori == "charger") {
					echo "<option value='charger' selected>Charger</option>";
				} else {
					echo "<option value='charger'>Charger</option>";
				}
				if ($subkategori == "earphone") {
					echo "<option value='earphone' selected>Earphone</option>";
				} else {
					echo "<option value='earphone'>Earphone</option>";
				}
				if ($subkategori == "handphone") {
					echo "<option value='handphone' selected>Handphone</option>";
				} else {
					echo "<option value='handphone'>Handphone</option>";
				}
				if ($subkategori == "headset") {
					echo "<option value='headset' selected>Headset</option>";
				} else {
					echo "<option value='headset'>Headset</option>";
				}
				if ($subkategori == "laptop") {
					echo "<option value='laptop' selected>Laptop</option>";
				} else {
					echo "<option value='laptop'>Laptop</option>";
				}
				if ($subkategori == "powerbank") {
					echo "<option value='powerbank' selected>Powerbank</option>";
				} else {
					echo "<option value='powerbank'>Powerbank</option>";
				}
				if ($subkategori == "speaker") {
					echo "<option value='speaker' selected>Speaker</option>";
				} else {
					echo "<option value='speaker'>Speaker</option>";
				}
				if ($subkategori == "usb") {
					echo "<option value='usb' selected>USB</option>";
				} else {
					echo "<option value='usb'>USB</option>";
				}
				if ($subkategori == "buku") {
					echo "<option value='buku' selected>Buku</option>";
				} else {
					echo "<option value='buku'>Buku</option>";
				}
				if ($subkategori == "binder") {
					echo "<option value='binder' selected>Binder</option>";
				} else {
					echo "<option value='binder'>Binder</option>";
				}
				if ($subkategori == "kotak_pensil") {
					echo "<option value='kotak_pensil' selected>Kotak Pensil</option>";
				} else {
					echo "<option value='kotak_pensil'>Kotak Pensil</option>";
				}
				if ($subkategori == "ktm") {
					echo "<option value='ktm' selected>KTM</option>";
				} else {
					echo "<option value='ktm'>KTM</option>";
				}
				if ($subkategori == "tas") {
					echo "<option value='tas' selected>Tas</option>";
				} else {
					echo "<option value='tas'>Tas</option>";
				}
				if ($subkategori == "dompet") {
					echo "<option value='dompet' selected>Dompet</option>";
				} else {
					echo "<option value='dompet'>Dompet</option>";
				}
				if ($subkategori == "jam_tangan") {
					echo "<option value='jam_tangan' selected>Jam Tangan</option>";
				} else {
					echo "<option value='jam_tangan'>Jam Tangan</option>";
				}
				if ($subkategori == "jaket") {
					echo "<option value='jaket' selected>Jaket</option>";
				} else {
					echo "<option value='jaket'>Jaket</option>";
				}
				if ($subkategori == "kamera") {
					echo "<option value='kamera' selected>Kamera</option>";
				} else {
					echo "<option value='kamera'>Kamera</option>";
				}
				if ($subkategori == "kartu_atm") {
					echo "<option value='kartu_atm' selected>Kartu ATM</option>";
				} else {
					echo "<option value='kartu_atm'>Kartu ATM</option>";
				}
				if ($subkategori == "kunci") {
					echo "<option value='kunci' selected>Kunci</option>";
				} else {
					echo "<option value='kunci'>Kunci</option>";
				}
				if ($subkategori == "motor") {
					echo "<option value='motor' selected>Motor</option>";
				} else {
					echo "<option value='motor'>Motor</option>";
				}
					if ($subkategori == "sepatu") {
					echo "<option value='sepatu' selected>Sepatu</option>";
				} else {
					echo "<option value='sepatu'>Sepatu</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><textarea type="text" name="deskripsi" rows="10" cols="30"><?php echo $deskripsi; ?></textarea></td>
			</tr>
			<tr>
				<td>Waktu Hilang</td>
				<td>:</td>
				<td><input type="datetime-local" name="waktuhilang" required /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><img src="<?php echo $foto; ?>" width="150px" height="100px"></td>
				<td><input type="file" name="foto" value="<?php echo $foto; ?>" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Sunting" name="sunting" /></td>
			</tr>
		</table>
	</form>

	</body>
</html>
