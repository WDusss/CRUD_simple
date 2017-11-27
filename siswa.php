
<h3>Data Siswa</h3>

<table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
      <tr>
        <tH>NO</tH>
        <tH>NAMA</tH>
		<tH>JK</tH>
		<tH>ALAMAT</tH>
        <tH>AGAMA</tH>
        
      </tr>
	  <?php
	  $nomor=1;
	  $siswa=mysql_query("SELECT * FROM siswa ORDER BY id_siswa DESC");
	  while($data=mysql_fetch_array($siswa)){
	  echo "
      <tr>
        <td>$nomor</td>      
        <td>$data[nama]</td>
		 <td>$data[kelamin]</td>
		<td> $data[alamat]</td>
       
        <td>$data[agama]</td>
        
		
		
	
      </tr>";
	  $nomor++;
	  }
	  ?>
    </table>

  