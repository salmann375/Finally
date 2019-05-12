<?php
include("config.php");

$id = $_GET['id'];

?>

<form action="admin_proses_loker.php" method="POST">
Masukkan loker  barang :
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<input type="varchar" name="loker" placeholder="A001" required autofocus/><be>
<input name="Submit" type="submit" value="Submit" />
</form>