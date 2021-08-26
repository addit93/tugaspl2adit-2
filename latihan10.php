<h1>Input Mata kuliah</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into mata_kuliah values(
'".$_POST['kode_mk']."',
'".$_POST['nama_mk']."'
)");

header('location:latihan9.php');
}
?>
<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="kode_mk"><br>
Nama Mata Kuliah <br>
<input type="text" name="nama_mk"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>