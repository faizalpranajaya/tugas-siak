<form action="" method="post">
	<input type="text" name="no_mk" required="required" size="30" class="form-control" placeholder="No MataKuliah">
	<input type="text" name="nama_mk" required="required" size="30" class="form-control" placeholder="Nama Matakuliah">
	<input type="text" name="sks" required="required" size="30" class="form-control" placeholder="SKS">
		<select class="form-control"  placeholder="Jurusan" name="dosen">			

	<?php 
		$query = mysql_query("SELECT * From tbl_dosen ORDER By nama_dosen");
			while ($result=mysql_fetch_object($query)) { ?>
  			<option  name="dosen" value="<?php echo $result->id_dosen;?>"><?php echo $result->nama_dosen; ?></option>
 	<?php } ?>
	<input type="submit" name="tmb_mk" value="Tambah" class="btn btn-lg btn-primary btn-block">
</form>

<?php 
	if (isset($_POST)) {
		$no_mk = trim($_POST['no_mk']);
		$nama_mk = trim($_POST['nama_mk']);
		$sks = trim($_POST['sks']);
		$dosen = trim($_POST['dosen']);
		$tmb_mk = $_POST['tmb_mk'];
		if ($tmb_mk) {
			mysql_query("INSERT INTO tbl_mk Values ('$no_mk','$nama_mk','$sks','$dosen')");
		}
	}

 ?>