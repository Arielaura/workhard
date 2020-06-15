<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color: #FFF;
}
</style>
</head>

<body>

  <table width="661" height="100" border="0" align="center">
    <tr>
      <td height="45" colspan="7" align="center" bgcolor="#333333"><strong>DATA BUKU</strong></td>
    </tr>
    <tr bgcolor="#FF0000">
      <td width="41" align="center" bgcolor="#333333">No</td>
      <td width="115" align="center" bgcolor="#333333">Kode Buku</td>
      <td width="165" align="center" bgcolor="#333333">Jenis Buku</td>
	   <td width="165" align="center" bgcolor="#333333">Judul Buku</td>
	    <td width="165" align="center" bgcolor="#333333">Pengarang</td>
      <td width="186" align="center" bgcolor="#333333">Jumlah Buku</td>
      <td width="186" align="center" bgcolor="#333333">Aksi</td>
	  
    </tr>
    <?php
	include "koneksi.php";
	
	$query = mysql_query("select*from data_buku");
	$no = 1;
	while($data = mysql_fetch_array($query))
	{
		if($no%2==0)
		{$bg="#33FFFF";}
		else
		{$bg="#FFFF66";}
	?>
    <tr bgcolor="<?php echo $bg; ?>">
      <td align="center" bgcolor="#333333"><?php echo $no; ?></td>
      <td align="center" bgcolor="#333333"><?php echo $data['Kode_Buku']; ?></td>
      <td align="center" bgcolor="#333333"><?php echo $data['Jenis_Buku']; ?></td>
      <td align="center" bgcolor="#333333"><?php echo $data['Judul_Buku']; ?></td>
	  <td align="center" bgcolor="#333333"><?php echo $data['Pengarang']; ?></td>
	  <td align="center" bgcolor="#333333"><?php echo $data['Jumlah_Buku']; ?></td>
      <td bgcolor="#333333"><center>
        <a href="update_buku.php?Kode_Buku=<?php echo $data['Kode_Buku'];?>">EDIT</a> 
        <a href="delete_buku.php?Kode_Buku=<?php echo $data['Kode_Buku'];?>"onclick="javascript: return 						        confirm('Anda Yakin Data <?php echo $data['id_user'];?> Akan Dihapus ?')">DELETE</a>
      </center></td>
    </tr>
    <?php
	$no++;}
	?>
	<tr>
	<td> <p></p>
	</td>
	</tr>
  </table>
  <a href="input_bukuu.php">Tambahkan Buku</a><br>
  <a href="home.php">kembali ke Home</a>
  <p>
    <center>
    </center>
  </p>
</form>
</body>
</html>