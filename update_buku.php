<?php
include "koneksi.php";
$kode=$_GET['Kode_Buku'];

$qdata2 = mysql_query("select Kode_Buku,Jenis_Buku,Judul_Buku,Pengarang,Jumlah_Buku from data_buku Where Kode_Buku='$kode'");
while($rdata2 = mysql_fetch_array($qdata2))
{
$jenis = $rdata2["Jenis_Buku"];
$judul = $rdata2["Judul_Buku"];
$pengarang = $rdata2["Pengarang"];
$jumlah = $rdata2["Jumlah_Buku"];
}
?>
<p align='center'>Ubah Data Buku <br><br>
<form method='post' action='proses_update.php'>
<input type='hidden' name='kode' value='<?php echo $kode; ?>'>
<input type='hidden' name='kirim_edit' value=1>
<table border=0 width=500 align='center'>

	<tr><td width="150" bgcolor="00FF7F">Kode Buku </td>
	<td><input type='text' name='kode' size=4 value='<?php echo $kode;?>'></td>
	</tr>
	
	<tr><td bgcolor="#00FF7F">Jenis Buku</td>
	<td><input type='text' name='Jenis_Buku' size=40 value='<?php echo $jenis;?>'></td>
	</tr>
	
	<tr><td bgcolor="#00FF7F">Judul Buku</td>
	<td><input type='text' name='Judul_Buku' size=40 value='<?php echo $judul;?>'></td>
	</tr>
	
	<tr><td bgcolor="#00FF7F">Pengarang</td>
	<td><input type='text' name='Pengarang' size=40 value='<?php echo $pengarang;?>'></td>
	</tr>
	
	<tr><td bgcolor="#00FF7F">Jumlah Buku</td>
	<td><input type='text' name='Jumlah_Buku' size=40 value='<?php echo $jumlah;?>'></td>
	</tr>
	
	<tr><td colspan=2 align='center'>
	<input type='submit' value='SAVE'><b align='center'>  </b><input type='reset' value='CANCEL'></td>
</tr>
</table></form></p>
