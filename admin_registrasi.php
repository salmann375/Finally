<!DOCTYPE html>
<html>
<head>
	<title>Finally | Registrasi Petugas</title>
</head>

<body>
	<header>
		<b><h3>Pendaftaran Akun Petugas Baru</h3></b>
	</header>
		<script src="js/show.js"></script>
	<form action="admin_prosespendaftaran.php" method="POST" enctype="multipart/form-data"> 			
		<fieldset> 														
		<p> 															
			<label for="username">Username: </label><br>
			<input type="varchar" name="username" placeholder="salmanfaris375" required autofocus>
		</p>
		<p>
			<label for="nama">Nama Lengkap: </label><br>
			<input type="varchar" name="nama" placeholder="salman al-farisi" required>
		</p>
		<p>
			<label for="no_ktp">No KTP: </label><br>
			<input type="tel" name="no_ktp" placeholder="32323232323232323" required>
		</p>
		<p>
			<label for="nohp">Nomor Handphone: </label><br>
			<input type="tel" name="nohp" placeholder="081234567890" required>
		</p>
		<p>
			<label for="alamat">Alamat: </label><br>
			<textarea type="text" name="alamat" rows="10" cols="20" placeholder="Desa Bababakan Raya RT/RW 20/07"></textarea>
		</p>
			<label for="foto">Foto: </label><br>
			<input type="file" name="foto"/>
		<p>
			<label for="password">Password: </label><br>
			<input type="password" name="password" id="password" placeholder="*******" required>
			<input type="checkbox" onclick="myFunction()">Show Password
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
</body>
</html>