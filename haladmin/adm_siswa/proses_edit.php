<?php
include ("../config.php");

mysql_query("UPDATE siswa SET nama='$_POST[txtnama]',
				
				kelamin='$_POST[kelamin]',
				agama='$_POST[agama]',
				alamat='$_POST[alamat]'			
				WHERE id_siswa='$_POST[id]'");

header('Location:../?p=mhs');
			
?>