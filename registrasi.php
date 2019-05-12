<!DOCTYPE html>
<html>
<head>
	<title>Finally | Register</title>
</head>

<body>
	<header>
		<b><h3>Pendaftaran Akun Baru</h3></b>
	</header>
		<script src="js/show.js"></script>
	<form action="prosespendaftaran.php" method="POST"> 			
		<fieldset> 														
		<p> 															
			<label for="uname">Username: </label><br>
			<input type="varchar" name="uname" placeholder="salmanfaris375" required autofocus>
		</p>
		<p>
			<label for="nama_lengkap">Nama Lengkap: </label><br>
			<input type="varchar" name="nama_lengkap" placeholder="salman al-farisi" required>
		</p>
		<p>
			<label for="email">Email: </label><br>
			<input type="email" name="email" placeholder="salman123@apps.ipb.ac.id" required>
		</p>
		<p>
			<label for="nohp">Nomor Handphone: </label><br>
			<input type="tel" name="nohp" placeholder="081234567890" required>
		</p>
		<p>
			<label for="status">Status: </label><br>
			<label><input type="radio" name="status" value="mahasiswa"> Mahasiswa</label>
			<label><input type="radio" name="status" value="dosen" required> Dosen</label>
			<label><input type="radio" name="status" value="lainnya"> Lainnya</label>
		</p>
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