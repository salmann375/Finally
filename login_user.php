<?php
include("config.php");

session_start();
if(isset($_SESSION['uname'])) {
	header('location:homepage.php?uname='.$_SESSION['uname']);}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Finally | Login</title>		
</head>																

<body>
	<header>													
		<h3>Platform Penemuan dan Kehilangan Barang</h3>			<!-- h1 h3 dsb itu buat ukuran font -->
		<h1>Finally</h1>
	</header>
		<script src="js/show.js"></script>
		<form action="proses_login_user.php" method="POST"> 
	<nav>
		<ul>

		<fieldset> 		
													
		<p> 															
			<label for="uname">Username: </label>
			<input type="varchar" name="uname" placeholder="salmanfaris375" required autofocus>
		</p>

		<p>
			<label for="password">Password: </label>
			<input type="password" name="password" id="password" placeholder="*******" required>
			<input type="checkbox" onclick="myFunction()">Show Password
		</p>

		<p>
			<input type="submit" id="masuk" name="masuk" value="Login" />
		</p>
		<p> 
			Belum memiliki akun? <a href="registrasi.php">Register</a><br>
			<a href="admin_login.php">Login sebagai admin</a>	<!-- href is like hyperlink -->
		</p>	

		</fieldset>
																					<!-- <li> itu buat bulleting -->
		</ul>
	</nav>
		</form>


	<?php if(isset($_GET['daftar'])): ?>							<!-- hasil pendaftaran siswa -->
	<p>
		<?php														
			if($_GET['daftar'] == 'sukses'){						
				echo "Pendaftaran berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	<?php if(isset($_GET['login'])): ?>							<!-- hasil pendaftaran siswa -->
	<p>
		<?php														
			if($_GET['login'] == 'gagal'){						
				echo "Username atau Password tidak ditemukan!";
			} else {}
		?>
	</p>
	<?php endif; ?>

</body>
</html>
