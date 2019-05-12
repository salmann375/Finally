<?php
include("config.php");
?>
		
<h1>Daftar Pengambilan</h1>
	<table border="1">
	<thead>
		<tr>
			<th>ID Pengambilan</th>
			<th>Waktu Pengambilan</th>
			<th>Petugas</th>
			<th>ID Klaim</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, waktu, uname_petugas, id_klaim FROM pengambilan";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($ambil = mysqli_fetch_array($query)){
			$id = $ambil['id'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$ambil['waktu']."</td>";
			echo "<td>".$ambil['uname_petugas']."</td>";
			echo "<td>".$ambil['id_klaim']."</td>";
			echo "</tr>";

			}

		?>
