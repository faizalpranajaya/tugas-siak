<?php if ($_SESSION['level']==3){
	header('location:index.php');
}else ?>
		<h2>Nilai</h2>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nilai">
		  Tambah Nilai
		</button>

		<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>No Stambuk</th>
				<th>Nama Mahasiswa</th>
				<th>Nama Dosen</th>
				<th>Nama Matakuliah</th>
				<th>Nilai</th>
				<th>Action</th>
			</tr>
			<?php
			if ($_SESSION['level']== 1) {
			 	
				$data_nilai= mysql_query("SELECT @rownum:=@rownum+1 as Nomor, m.id_mhs,m.nama_mhs, d.nama_dosen, mk.nama_mk, n.nilai from tbl_nilai n, tbl_mhs m, tbl_dosen d, tbl_mk mk where n.no_mk = mk.no_mk and  n.no_dosen = d.id_dosen and n.no_stb = m.id_mhs");
			}elseif ($_SESSION['level']== 2) {
			$query = mysql_query("SELECT * FROM tbl_dosen where id_dosen = '". $_SESSION['username'] ."' OR email = '". $_SESSION['username'] ."'");
			while ($result=mysql_fetch_object($query)) {
				$id = $result->id_dosen;
			}
				$data_nilai= mysql_query("SELECT @rownum:=@rownum+1 as Nomor, m.id_mhs, m.nama_mhs, d.nama_dosen, mk.nama_mk, n.nilai FROM tbl_nilai n, tbl_mhs m, tbl_dosen d, tbl_mk mk WHERE n.no_mk = mk.no_mk AND n.no_dosen =  d.id_dosen AND n.no_stb = m.id_mhs AND d.id_dosen = '$id'");
			}
				while ($show_nilai =mysql_fetch_object($data_nilai)) { ?>
					<tr>
						<td><?=$show_nilai->Nilai;?></td>
						<td><?=$show_nilai->id_mhs;?></td>
						<td><?=$show_nilai->nama_mhs;?></td>
						<td><?=$show_nilai->nama_dosen;?></td>
						<td><?=$show_nilai->nama_mk;?></td>
						<td><?=$show_nilai->nilai;?></td>
						<td>&nbsp;<a href="?edit=<?=$show_nilai->no_nilai;?>"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;|&nbsp;<a href="?delete=<?=$show_nilai->no_nilai;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
				<?php }
			 ?>
		</table>
		<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="nilai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <?php  require_once 'Includes/form/form.nilai.php'; ?>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->