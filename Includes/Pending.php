<h2>Pending</h2>
<div class="table-responsive">
	
						<table class="table table-condensed">
							<tr>
								<th>#</th>
								<th>No Stambuk</th>
								<th>Nama</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Email</th>
								<th>Jurusan</th>
								<th>Jenis Kelamin</th>
								<th>No Tlp</th>
								<th>Level</th>
								<th>Action</th>
							</tr>				
				<?php 	

					$sql = mysql_query("SELECT @rownum:=@rownum+1 as Nomor, s.id_mhs, s.tmp_lahir, s.alamat, s.nama_mhs, s.email, s.jurusan, date_format(s.tgl_lahir,'%d %M %Y') as tgl_lahir,(CASE WHEN jk =  'L' THEN  'Laki-Laki' WHEN jk =  'P' THEN  'Perempuan' END ) AS jk, s.angkatan, s.no_tlp, s.level from tbl_sementara s,  (select @rownum:=0) nomor");
						while ($show_pending = mysql_fetch_object($sql)) { ?>
							<tr>
								<td><?php echo $show_pending->Nomor; ?></td>
								<td><?php echo $show_pending->id_mhs; ?></td>
								<td><?php echo $show_pending->nama_mhs; ?></td>
								<td><?php echo $show_pending->tmp_lahir; ?></td>
								<td><?php echo $show_pending->tgl_lahir; ?></td>
								<td><?php echo $show_pending->email; ?></td>
								<td><?php echo $show_pending->jurusan ?></td>
								<td><?php echo $show_pending->jk;?></td>
								<td><?php echo $show_pending->no_tlp;?></td>
								<td><?php echo $show_pending->level;?></td>
								<td>&nbsp;<a href="?accept=<?=$show_pending->id_mhs;?>"><i class="glyphicon glyphicon-ok"></i></a>&nbsp;<a href="?delete=<?=$show_pending->id_mhs;?>"><i class="glyphicon glyphicon-remove"></i></a></td>
							</tr>
							<?php } ?>
						</table>
</div>