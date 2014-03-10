<!-- Button trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="glyphicon glyphicon-plus">Mata Kuliah</i>
</button>
	<h2>Mata Kuliah</h2>
		<table class="table table-striped">
			<tr>
				<th>No Matakuliah</th>
				<th>Nama Matakuliah</th>
				<th>SKS</th>
				<th>Dosen</th>
				<th>Edit/Delete</th>
			</tr>
			<?php 
				$data_mk= mysql_query("SELECT tbl_mk.no_mk, tbl_mk.nama_mk, tbl_mk.sks, tbl_dosen.nama_dosen from tbl_mk, tbl_dosen where tbl_mk.id_dosen = tbl_dosen.id_dosen ORDER BY tbl_mk.nama_mk");
				while ($show_mk =mysql_fetch_object($data_mk)) { ?>
					<tr>
						<td><?=$show_mk->no_mk;?></td>
						<td><?=$show_mk->nama_mk;?></td>
						<td><?=$show_mk->sks;?></td>
						<td><?=$show_mk->nama_dosen;?></td>
						<td>&nbsp;<a href="?edit=<?=$show_mk->no_mk;?>"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;|&nbsp;<a href="?delete=<?=$show_mk->no_mk;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
				<?php }
			 ?>
		</table>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah MataKuliah</h4>
      </div>
      <div class="modal-body">
       	<?php require_once 'Includes/form/form.matakuliah.php'; ?>
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->