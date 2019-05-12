<?php
include("config.php");

if(isset($_POST['search'])){
  $search = $_POST['search'];
}
?>
<body>
Hai Selamat Datang
<fieldset>
Pencarian:<br>
<form  method="post" action="search.php"> 
<input  type="text" name="search"> 
<input  type="submit" name="submit" value="Search"><br>
<?php echo "Hasil pencarian : ".$search; ?>
</form> 
Tambah Laporan :<br>
<a href="laporan_penemuan.php">Laporan Penemuan</a><br>
<a href="laporan_kehilangan.php">Laporan Kehilangan</a><br>
Profil :<br>
<a href="logout_user.php">Logout</a>  
<br>
<h1>Laporan Kehilangan</h1>
  <table border="1">
  <style>
  .image-style{
    width:20vh;
    height:20vh;
  }
  </style>
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
  if(isset($_POST['search'])){
    $search = $_POST['search'];
    $query = mysqli_query($connect, "SELECT id, judul, foto, waktuhilang FROM laporan_kehilangan WHERE judul LIKE '%".$search."%'");       
  }else{
    $query = mysqli_query($connect, "SELECT id, judul, foto, waktuhilang FROM laporan_kehilangan");
  }
  while($lk = mysqli_fetch_array($query)){
    $id = $lk['id'];
    $loc = $lk['foto'];
    echo "<tr>";

    echo "<td>".$lk['judul']."</td>";
    echo "<td>"."<img class='image-style' src=".$loc.">"."</td>";
    echo "<td>".$lk['waktuhilang']."</td>";
    echo "<td><a href = lk_view.php?id=$id>Lihat</a> <a href = lk_formedit.php?id=$id>Edit</a> <a href = lk_delete.php?id=$id>Hapus</a></td>";
    echo "</tr>";
  }
?>
  </tbody>
  </table>

<h1>Laporan Penemuan<h1>
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
  if(isset($_POST['search'])){
    $search = $_POST['search'];
    $query = mysqli_query($connect, "SELECT id, judul, tempat, foto, waktutemu FROM laporan_penemuan WHERE judul LIKE '%".$search."%'");       
  }else{
    $query = mysqli_query($connect, "SELECT id, judul, tempat, foto, waktutemu FROM laporan_penemuan");
  }
  while($lp = mysqli_fetch_array($query)){
      $id = $lp['id'];
      $loct = $lp['foto'];
      echo "<tr>";

      echo "<td>".$lp['judul']."</td>";
      echo "<td>"."<img class='image-style' src=".$loct.">"."</td>";
      echo "<td>".$lp['tempat']."</td>";
      echo "<td>".$lp['waktutemu']."</td>";
      echo "<td><a href = lp_view.php?id=$id>Lihat</a> <a href = lp_formedit.php?id=$id>Edit</a> <a href = lp_delete.php?id=$id>Hapus</a></td>";
      echo "</tr>";

      }

?>
  </tbody>
  </table>
</fieldset>
</body>
</html>