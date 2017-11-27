<?php
include ("../config.php");
mysql_query("INSERT INTO guru(nip,nama,kelamin,agama,jabatan)
			VALUES('$_POST[txtnip]','$_POST[txtnama]',
			
			'$_POST[kelamin]',
			'$_POST[agama]','$_POST[jabatan]')");

header('Location:../?p=guru');	
?>