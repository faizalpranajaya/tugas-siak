		<div id="dosen">
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<th>ID Dosen</th>
					<th>Nama Dosen</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>No Tlp</th>
					<th>Jenis Kelamin</th>
					<th>Edit/Delete</th>
				</tr>

		<?php 
			$dosen = mysql_query("SELECT @rownum:=@rownum+1 as Nomor, d.id_dosen,d.nama_dosen,d.email,d.alamat,d.tmp_lahir_dosen, d.no_tlp_dosen, date_format(d.tgl_lahir_dosen,'%d %M %Y') as tgl_lahir,(CASE WHEN jk =  'L' THEN  'Laki-Laki' WHEN jk =  'P' THEN  'Perempuan' END ) AS jk from tbl_dosen d");
			while ($show_dosen=mysql_fetch_object($dosen)) {?>
				<tr>
					<td><?=$show_dosen->Nomor;?></td>
					<td><?=$show_dosen->id_dosen;?></td>
					<td><?=$show_dosen->nama_dosen;?></td>
					<td><?=$show_dosen->email;?></td>
					<td><?=$show_dosen->alamat;?></td>
					<td><?=$show_dosen->tmp_lahir_dosen;?></td>
					<td><?=$show_dosen->tgl_lahir;?></td>
					<td><?=$show_dosen->no_tlp_dosen;?></td>
					<td><?=$show_dosen->jk;?></td>
					<td>&nbsp;<a href="?edit=<?=$show_dosen->id_dosen;?>"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;<a href="?delete=<?=$show_dosen->id_dosen;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
				</tr>
			<?php } ?>
			</table>

