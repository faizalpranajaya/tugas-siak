<?php
if ($_SESSION['level']== 1) { ?>
	<form action="" method="post">
	<input type="text" name="no_stb" required="required" size="30" class="form-control" placeholder="No Stambuk">
	<input type="text" name="no_mk" required="required" size="30" class="form-control" placeholder="No Matakuliah">
	<input type="text" name="no_dosen" required="required" size="30" class="form-control" placeholder="No Dosen">
	<input type="text" name="nilai" required="required" size="30" class="form-control" placeholder="Nilai">
	<br>
	<input type="submit" name="tmb_nilai" value="Tambah" class="btn btn-lg btn-primary btn-block">
</form>
<?php
} elseif ($_SESSION['level']==2) { ?>
	<form action="" method="post">
	<input type="text" name="no_stb" required="required" size="30" class="form-control" placeholder="No Stambuk">
	<select class="form-control"  placeholder="Jurusan" name="no_mk">			

	<?php 
		$query = mysql_query("SELECT d.id_dosen, mk.no_mk, mk.nama_mk FROM tbl_dosen d, tbl_mk mk where d.id_dosen = '". $_SESSION['username'] ."' AND mk.id_dosen = d.id_dosen OR d.email = '". $_SESSION['username'] ."' AND mk.id_dosen = d.id_dosen");
			while ($result=mysql_fetch_object($query)) { 
			$iddosen = $result->id_dosen;?>
  			<option  name="no_mk" value="<?php echo $result->no_mk;?>"><?php echo $result->nama_mk; ?></option>
 	<?php } ?>
	<input type="text" name="nilai" required="required" size="30" class="form-control" placeholder="Nilai">
	<br>
	<input type="submit" name="tmb_nilai" value="Tambah" class="btn btn-lg btn-primary btn-block">
</form>
	
<?php }
	if (isset($_POST)) {
		$no_stb = trim($_POST['no_stb']);
		$no_mk 	= trim($_POST['no_mk']);
		if ($_SESSION['level']==1) {
			$no_dosen = trim($_POST['no_dosen']);
		}elseif ($_SESSION['level']==2) {
			$no_dosen = $iddosen;
		}
		$nilai = trim($_POST['nilai']);
		$tmb_nilai = $_POST['tmb_nilai'];
		if ($tmb_nilai) {
			mysql_query("INSERT INTO tbl_nilai Values ('','$no_stb','$no_mk','$no_dosen','$nilai')");
		}
	}
?>
