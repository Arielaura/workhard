<?php

include "koneksi.php";
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$login=mysql_query("SELECT*FROM admin WHERE Username='$user' AND Password='$pass'")or die (mysql_error());
$rt=mysql_fetch_array($login);
if(mysql_num_rows($login)>0){
	$_SESSION['user_aktif']=$user;
	?>
	<script type="text/javascript"> window.location.href="home.php"; </script>
	
	<?php
}
else{
	?>
	<script type="text/javascript">alert("login gagal");</script>
	<?php
}
?>






