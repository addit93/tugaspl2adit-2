<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan Kode Mata Kuliah
$kode_mk= $_GET['kode_mk'];
 
// Perintah delete data berdasarkan Kode Mata Kuliah
$query=mysqli_query($con,"DELETE FROM mata_kuliah WHERE kode_mk=$kode_mk")or die(mysql_error());
 

header('location:latihan9.php');
?>