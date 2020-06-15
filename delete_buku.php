<?php
{
include "koneksi.php";
$kode=$_GET['Kode_Buku'];
$query2 = "delete from data_buku Where Kode_Buku='$kode'";
mysql_query($query2);

}
?>
<script type="text/javascript"> window.location.href="laporan_buku.php"; </script>