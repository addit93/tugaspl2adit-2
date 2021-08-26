<h1>Ubah Data Mata Kuliah</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$kode_mk= $_GET['kode_mk'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM mata_kuliah WHERE kode_mk='$kode_mk'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama_mk= $_POST['nama_mk'];
$query=mysqli_query($con,"UPDATE mata_kuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk' WHERE kode_mk='$kode_mk'");
header('location:latihan9.php');
}

?>

<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="kode_mk" value="<?php echo $data['kode_mk'] ?>" disabled><br>
Nama Mata Kuliah <br>
<input type="text" name="nama_mk" value="<?php echo $data['nama_mk'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>

<?php } ?>
