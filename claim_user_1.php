<?php
include("config.php");

$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT id FROM barang WHERE id_lp = $id");
while ($barang = mysqli_fetch_array($query)){
	$id = $barang['id'];
}
?>

<form action="proses_claim.php" method="POST">
Masukkan Waktu Pengambilan :
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<input type="datetime-local" name="waktu_ambil" required autofocus/><be>
<input name="Submit" type="submit" value="Submit" />
</form>