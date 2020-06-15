<?php
 include "koneksi.php";
?>


<form id="form2" name="form2" method="post" action="simpan_buku.php">

  <table width="401" border="1" align="center">
    <tr>
      <td colspan="3" align="center">INPUT BUKU</td>
    </tr>
    <tr>
      <td width="105" bgcolor="#00FFFF">Kode Buku</td>
      <td width="8" bgcolor="#00FFFF">:</td>
      <td bgcolor="#00FFFF"><input name="kode" type="text" id="Kode_Buku" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF">Jenis Buku</td>
      <td bgcolor="#00FFFF">:</td>
      <td bgcolor="#00FFFF"><input name="Jenis_Buku" type="text" id="Jenis_Buku" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF">Judul Buku</td>
      <td bgcolor="#00FFFF">:</td>
      <td bgcolor="#00FFFF"><input name="Judul_Buku" type="text" id="Judul_Buku" size="30" maxlength="30" /></td>
    </tr>
	
	<tr>
      <td bgcolor="#00FFFF">Pengarang</td>
      <td bgcolor="#00FFFF">:</td>
      <td bgcolor="#00FFFF"><input name="Pengarang" type="text" id="Pengarang" size="30" maxlength="30" /></td>
    </tr>
	
	
	<tr>
      <td bgcolor="#00FFFF">Jumlah Buku</td>
      <td bgcolor="#00FFFF">:</td>
      <td bgcolor="#00FFFF"><input name="Jumlah_Buku" type="text" id="Jumlah_Buku" size="30" maxlength="30" /></td>
    </tr>

  <tr>
      <td colspan="3" align="center"><input type="submit" name="simpan" id="input" value="input" />
      <input type="submit" name="input" id="input" value="batal" /></td>
    </tr>
  </table>
  <p><a href="laporan_buku.php">Kembali ke Laporan</a></p>
</form>