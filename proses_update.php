<?php
include "koneksi.php";
$kode=$_POST['kode'];
$jenis =$_POST["Jenis_Buku"];
$judul =$_POST["Judul_Buku"];
$pengarang =$_POST["Pengarang"];
$jumlah = $_POST["Jumlah_Buku"];

$query = "UPDATE data_buku SET Kode_Buku='$kode', Jenis_Buku='$jenis', Judul_Buku='$judul', Pengarang='$pengarang', Jumlah_Buku='$jumlah' Where Kode_Buku='$kode'";
$hasil = mysql_query($query);

?>
<script type="text/javascript"> window.location.href="laporan_buku.php"; </script>
