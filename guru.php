
<h3>Data guru</h3>


<table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>KELAMIN</th>
        <th>AGAMA</th>
        <th>Jabatan</th>
		
      </tr>
	  <?php
	  $nomor=1;
	  $guru=mysql_query("SELECT * FROM guru ORDER BY id_guru DESC");
	  while($data=mysql_fetch_array($guru)){
	  echo "
      <tr>
        <td>$nomor</td>
        <td>$data[nip]</td>
        <td>$data[nama]</td>
        <td>$data[kelamin]</td>
        <td>$data[agama]</td>
        <td>$data[jabatan]</td>
	
      </tr>";
	  $nomor++;
	  }
	  ?>
   

