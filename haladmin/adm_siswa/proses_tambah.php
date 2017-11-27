<?php
include ("../config.php");
mysql_query("INSERT INTO siswa(nama,kelamin,agama,alamat)
			VALUES('$_POST[nama]',
			
			'$_POST[kelamin]',
			'$_POST[agama]','$_POST[alamat]')");

header('Location:../?p=mhs');	
?>