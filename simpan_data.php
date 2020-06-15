<?php
include "koneksi.php";
$kode=$_POST['kode_barang'];
$nama=$_POST['nama_barang'];
$harga=$_POST['harga'];
$query = "insert into barang (kode,nama_barang,harga)
values ('$kode','$nama','$harga')";
$hasil = mysqli_query($connect,$query);
if($hasil)
{
echo "<h3 align='center'>Pengiriman Data Sukses !</h3>";
} else {
echo "<h3 align='center'>Pengiriman Data Gagal !
<input type=button value=BACK 
OnClick=self.history.back();></h3>";
}
?>

