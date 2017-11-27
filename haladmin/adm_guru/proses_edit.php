<?php
include ("../config.php");

mysql_query("UPDATE guru SET nip='$_POST[txtnip]',
				nama='$_POST[txtnama]',
				tpt_lahir='$_POST[txttmplahir]',
				tgl_lahir='$_POST[txttgllahir]',
				kelamin='$_POST[kelamin]',
				agama='$_POST[agama]',
				jabatan='$_POST[jabatan]'
				WHERE id_guru='$_POST[id]'");

header('Location:../?p=guru');
			
?>