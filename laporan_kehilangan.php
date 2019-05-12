<!DOCTYPE html>
<html>
<head>
	<title>Finally | Laporan</title>
</head>
<body>
	<header>
		<meta charset="utf-8"/>
		<b><h3>Laporan Kehilangan</h3></b>
	</header>
	<form action="proseskehilangan.php" method="POST" enctype="multipart/form-data"> 			
		<table>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="varchar" name="judul" placeholder="Handphone Nokia 3610" required autofocus></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
				<select name="kategori" required>
				<option value="">Kategori</option>
				<option value="alat_elektronik">Alat elektronik</option>
				<option value="perlengkapan_kuliah">Perlengkapan kuliah</option>
				<option value="lainnya">Lainnya</option>
				</select>	
				</td>
			</tr>
			<tr>
				<td>Subkategori</td>
				<td>:</td>
				<td>
				<select name="subkategori"required>
				<option value="">Subkategori</option>
				<option value="adaptor">Adaptor</option>
				<option value="charger">Charger</option>
				<option value="earphone">Earphone</option>
				<option value="handphone">Handphone</option>
				<option value="headset">Headset</option>
				<option value="laptop">Laptop</option>
				<option value="powerbank">Powerbank</option>
				<option value="speaker">Speaker</option>
				<option value="usb">USB</option>
				<option value="buku">Buku</option>
				<option value="binder">Binder</option>
				<option value="kotak_pensil">Kotak Pensil</option>
				<option value="ktm">KTM</option>
				<option value="tas">Tas</option>
				<option value="dompet">Dompet</option>
				<option value="jam_tangan">Jam Tangan</option>
				<option value="jaket">Jaket</option>
				<option value="kamera">Kamera</option>
				<option value="kartu_atm">Kartu ATM</option>
				<option value="kunci">Kunci</option>
				<option value="motor">Motor</option>
				<option value="sepatu">Sepatu</option>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><textarea type="text" name="deskripsi" rows="10" cols="30"></textarea></td>
			</tr>
			<tr>
				<td>Waktu Hilang</td>
				<td>:</td>
				<td><input type="datetime-local" name="waktuhilang"/></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto"/></td>
			</tr>
			<td><input type="submit" name="submit" value="Submit"/></td>
		</table>
	</form>
</body>
</html>
