<?php
switch($_GET[aksi]){
default:
?>
<h3>Administrasi Data Siswa</h3>
<hr/>
<a href="?p=mhs&aksi=tambahsiswa" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
      <tr>
        <tH>NO</tH>
        <tH>NAMA</tH>
		<tH>JK</tH>
		<tH>ALAMAT</tH>
        <tH>AGAMA</tH>
        <TH>AKSI</TH>
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
        
		
		
	<td><a href='?p=mhs&aksi=editsiswa1&id=$data[id_siswa]'>Edit</a> / 
	<a href='adm_siswa/proses_hapus.php?id=$data[id_siswa]'>Hapus</a></td>
      </tr>";
	  $nomor++;
	  }
	  ?>
    </table>
<?php
break;
case "tambahsiswa":
?>
<h3>Tambah Siswa</h3>
<form id="form1" name="form1" method="post" action="adm_siswa/proses_tambah.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
									  <td>NAMA</td>
									  <td> 
									  <input name="nama" type="text" id="nama"  style="text-transform:uppercase"></td>
									</tr>
									<tr>
									  <td>ALAMAT</td>
									  <td valign="top"> 
									  <textarea name="alamat"  id="alamat"></textarea></td>
									</tr>
									<tr>
									  <td>JENIS KELAMIN </td>
									  <td>
										<select name="kelamin" id="kelamin">
										  <option value="LAKI-LAKI">LAKI-LAKI</option>
										  <option value="PEREMPUAN">PEREMPUAN</option>
										</select>
									  </td>
									</tr>
									
									
									<tr>
									  <td>AGAMA</td>
									  <td>
										<select name="agama" id="agama">
										  <option value="ISLAM">ISLAM</option>
										  <option value="PROTESTAN">PROTESTAN</option>
										  <option value="KATOLIK">KATOLIK</option>
										  <option value="HINDU">HINDU</option>
										  <option value="BUDHA">BUDHA</option>
										</select>
									  </td>
									</tr>
									
									
									<tr>
									  <td height="30">&nbsp;</td>
									  <td valign="top"><input type="submit" name="Submit" value="Submit">
									  <input type="reset" name="Submit2" value="Reset"></td>
									</tr>
  </table>
  
</form>
<?php
break;
case "editsiswa1":
?>
<h3>Edit Siswa</h3>
<?php
$siswa=mysql_query("SELECT * FROM siswa WHERE id_siswa='$_GET[id]'");
$data=mysql_fetch_array($siswa);
?>
<form id="form1" name="form1" method="post" action="adm_siswa/proses_edit.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="4" >
  <input type="hidden" name="id" value="<?php echo $data['id_siswa']; ?>" />
    <tr>
      <td>NAMA</td>
      <td>
        <input name="txtnama" type="text" id="txtnama" value="<?php echo $data['nama']; ?>" />
      </td>
    </tr>
	<tr>
	 <td>ALAMAT</td>
	 <td valign="top"> 
	 <textarea name="alamat"  id="alamat" ><?php echo $data['alamat']; ?></textarea></td>
	</tr>
		
	
    <tr>
      <td>JENIS KELAMIN </td>
      <td>
        <select name="kelamin" id="kelamin">
		  <option value="<?php echo $data['kelamin']; ?>" selected="selected"><?php echo $data['kelamin']; ?></option>
          <option value="LAKI-LAKI">LAKI-LAKI</option>
          <option value="PEREMPUAN">PEREMPUAN</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>AGAMA</td>
      <td>
        <select name="agama" id="agama">
		  <option value="<?php echo $data['agama']; ?>" selected="selected"><?php echo $data['agama']; ?></option>
          <option value="ISLAM">ISLAM</option>
          <option value="PROTESTAN">PROTESTAN</option>
          <option value="KATOLIK">KATOLIK</option>
          <option value="HINDU">HINDU</option>
          <option value="BUDHA">BUDHA</option>
        </select>
      </td>
    </tr>

	
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="Update" value="UPDATE" />
      </td>
    </tr>
  </table>
</form>
<?php
}
?>
