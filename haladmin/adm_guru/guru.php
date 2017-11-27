<?php
switch($_GET[aksi]){
default:
?>
<h3>Administrasi Data guru</h3>

<a href="?p=guru&aksi=tambahguru" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>KELAMIN</th>
        <th>AGAMA</th>
        <th>Jabatan</th>
		<th>AKSI</th>
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
	<td><a href='?p=guru&aksi=editguru&id=$data[id_guru]'>Edit</a> / 
	<a href='adm_guru/proses_hapus.php?id=$data[id_guru]'>Hapus</a></td>
      </tr>";
	  $nomor++;
	  }
	  ?>
    </table>
<?php
break;
case "tambahguru":
?>
<h3>Tambah guru</h3>
<form id="form1" name="form1" method="post" action="adm_guru/proses_tambah.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
      <td width="120">NIP</td>
      <td>
        <input name="txtnip" type="text" id="txtnis" />
      </td>
    </tr>
    <tr>
      <td>NAMA</td>
      <td>
        <input name="txtnama" type="text" id="txtnama" />
      </td>
    </tr>
	<tr>
      <td>JENIS KELAMIN </td>
      <td>
        <select name="kelamin" id="kelamin">
		<option value="">-Pilih-</option>
          <option value="LAKI-LAKI">LAKI-LAKI</option>
          <option value="PEREMPUAN">PEREMPUAN</option>
        </select>
      </td>
    </tr>
	
	
    <tr>
      <td>AGAMA</td>
      <td>
        <select name="agama" id="agama">
			<option value="">-Pilih-</option>
          <option value="ISLAM">ISLAM</option>
          <option value="PROTESTAN">PROTESTAN</option>
          <option value="KATOLIK">KATOLIK</option>
          <option value="HINDU">HINDU</option>
          <option value="BUDHA">BUDHA</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>JABATAN</td>
      <td>
        <select name="jabatan" id="jabatan">
		<option value="">-Pilih-</option>
          <option value="Kepala Sekolah">Kepala Sekolah</option>
          <option value="Waka. Kurikulum">W.Kurikulum</option>
          <option value="Waka. Kesiswaan">W. Kesiswaan</option>
          <option value="Wali Kelas">Wali Kelas</option>
          <option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
		  <option value="Tata Usaha">Tata Usaha</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="Submit" value="SIMPAN" />
      </td>
    </tr>
  </table>
</form>
<?php
break;
case "editguru":
?>
<h3>Edit guru</h3>
<?php
$guru=mysql_query("SELECT * FROM guru WHERE id_guru='$_GET[id]'");
$data=mysql_fetch_array($guru);
?>
<form id="form1" name="form1" method="post" action="adm_guru/proses_edit.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
  <input type="hidden" name="id" value="<?php echo $data['id_guru']; ?>" />
    <tr>
      <td width="120">NIP</td>
      <td>
        <input name="txtnip" type="text" id="txtnip" value="<?php echo $data['nip']; ?>" />
      </td>
    </tr>
    <tr>
      <td>NAMA</td>
      <td>
        <input name="txtnama" type="text" id="txtnama" value="<?php echo $data['nama']; ?>" />
      </td>
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
      <td>JABATAN</td>
      <td>
        <select name="jabatan" id="jabatan">
		  <option value="<?php echo $data['jabatan']; ?>" selected="selected">
		  <?php echo $data['jabatan']; ?></option>
          <option value="Kepala Sekolah">Kepala Sekolah</option>
          <option value="Waka. Kurikulum">Waka. Kurikulum</option>
          <option value="Waka. Kesiswaan">Waka. Kesiswaan</option>
          <option value="Waka. Sarana & Prasarana">Waka. Sarana & Prasarana</option>
          <option value="Wali Kelas">Wali Kelas</option>
          <option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
		  <option value="Tata Usaha">Tata Usaha</option>
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
