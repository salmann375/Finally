<?php
include("config.php");
?>
		
<h1>Daftar Barang</h1>
	<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Status</th>
			<th>Loker</th>
			<th>Waktu Diterima</th>
			<th>ID Laporan</th>
			<th>Penerima</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$quer = "SELECT id, status, loker, waktu_diterima, id_lp, penerima FROM barang";
		$query = mysqli_query($connect, $quer);
		// $query = mysqli_query($db, $sql);
		while($barang = mysqli_fetch_array($query)){
			$id = $barang['id'];
			echo "<tr>";

			echo "<td>".$id."</td>";
			echo "<td>".$barang['status']."</td>";
			echo "<td>".$barang['loker']."</td>";
			echo "<td>".$barang['waktu_diterima']."</td>";
			echo "<td>".$barang['id_lp']."</td>";
			echo "<td>".$barang['penerima']."</td>";
			echo "</tr>";

			}

		?>
