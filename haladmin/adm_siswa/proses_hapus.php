<?php
include ("../config.php");

mysql_query("DELETE FROM siswa WHERE id_siswa='$_GET[id]'");

header('Location:../?p=mhs');
			
?>