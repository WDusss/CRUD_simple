<?php
include ("../config.php");

mysql_query("DELETE FROM guru WHERE id_guru='$_GET[id]'");

header('Location:../?p=guru');
			
?>