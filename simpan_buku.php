<?php
include "koneksi.php";
$kode=$_POST['kode'];
$jenis = $_POST['Jenis_Buku'];
$judul = $_POST['Judul_Buku'];
$pengarang = $_POST['Pengarang'];
$jumlah = $_POST['Jumlah_Buku'];
$query = "insert into Data_Buku (Kode_Buku,Jenis_Buku, Judul_Buku, Pengarang, Jumlah_Buku)
values ('$kode', '$jenis','$judul','$pengarang', '$jumlah')";
$hasil = mysql_query($query);

?>
<p><a href="laporan_buku.php">Kembali ke Laporan</a></p>
