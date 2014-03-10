		<h2>Mahasiswa</h2>
		<table class="table table-hover">
			<tr>
					<th>#</th>
					<th>No Stambuk</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Jurusan</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Angkatan</th>
					<th>No Tlp</th>
					<th>Action</th>
			</tr>	
	<?php 
		$data_mhs=mysql_query("SELECT @rownum:=@rownum+1 as Nomor, m.id_mhs, m.tmp_lahir, m.alamat, m.nama_mhs, m.email, m.jurusan, date_format(m.tgl_lahir,'%d %M %Y') as tgl_lahir,(CASE WHEN jk =  'L' THEN  'Laki-Laki' WHEN jk =  'P' THEN  'Perempuan' END ) AS jk, m.angkatan, m.no_tlp  from tbl_mhs m,  (select @rownum:=0) nomor");
		while ($show_data= mysql_fetch_object($data_mhs)) { //mengambil data mahasiswa dari database ?>	
		<tr>
			<td><?=$show_data->Nomor;?></td>
			<td><?=$show_data->id_mhs;?></td>
			<td><?=$show_data->nama_mhs;?></td>
			<td><?=$show_data->email;?></td>
			<td><?=$show_data->alamat;?></td>
			<td><?=$show_data->jurusan;?></td>
			<td><?=$show_data->tmp_lahir;?></td>
			<td><?=$show_data->tgl_lahir;?></td>
			<td><?=$show_data->jk;?></td>
			<td><?=$show_data->angkatan;?></td>
			<td><?=$show_data->no_tlp;?></td>
			<td>&nbsp;<a href="#dialog-mahasiswa" id="<?php echo $data['kd_mhs'] ?>" class="ubah"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;<a href="?delete=<?=$show_data->id_mhs;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
		<?php } ?>
		</table>
<?php 
if ($_GET['edit']) {
	$editquery = mysql_query("SELECT * FROM tbl_mhs WHERE id_mhs = '".$_GET['edit']."'");
	$slcedit= mysql_fetch_object($editquery);?>


<?php }
 
if ($_GET['delete']) {
	$deletequery = mysql_query("DELETE FROM tbl_mhs where id_mhs = '". $_GET['delete'] ."'");
}
 ?>