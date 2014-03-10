<form action="" method="post" class="form-signin" role="form">
	<input type="text" name="id_dosen"  required="required" size="30" class="form-control" placeholder="Id Dosen">
	<input type="text" name="nama" required="required" size="30" class="form-control" placeholder="Nama">
	<input type="email" name="email"  required="required" size="30" class="form-control" placeholder="Email">
	<input type="text" name="tmp_lahir" required="required" size="30" class="form-control" placeholder="Tempat Lahir">

	<input type="password" name="password"  required="required" size="30" class="form-control" placeholder="Password">
	<input type="password" name="re-password" id=""  required="required" size="30" class="form-control" placeholder="Repassword">
	<select name="tgl">
			<option value="">Tanggal</option>
				<?php 	
					$tgl = 1;
					while ( $tgl<= 31) {
				 ?>
			<option value="<?=$tgl;?>"><?=$tgl;$tgl++;}?></option>
		</select>
		<select name="bulan">
			<option value="">Bulan</option>
			<?php 	
				$bulan = 1;
				while ( $bulan<= 12) {
			 ?>
			<option value="<?=$bulan;?>"><?=$bulan;$bulan++;}?></option>
		</select>
		<input type="year" name="tahun" size="4" required="required" placeholder="ex:1990" >
		<br>
		<div class="radio">
		<input type="radio" name="jk" id="optionsRadios1" value="L">Laki - Laki
		</div>
		<div class="radio">
		<input type="radio" name="jk" id="optionsRadios2" value="P">Perempuan
		</div>
				<input type="text" name="no_tlp" placeholder="No tlp / No HP" required="required" class="form-control">
		<textarea name="alamat" id="" cols="50" rows="3" class="form-control" required="required" placeholder="Alamat"></textarea>
		<br>
		<input type="submit" name="kirimdosen" class="btn btn-lg btn-primary btn-block" value="Daftar!" >
</form>
<?php 
	if (isset($_POST)) {
		$id_dosen = trim($_POST['id_dosen']);
		$nama = trim($_POST['nama']);
		$email = trim($_POST['email']);
		$password = trim(md5($_POST['password']));
		$tmp_lahir = trim($_POST['tmp_lahir']);
		$tgl_lahir = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tgl'];
		$jk = trim($_POST['jk']);
		$no_tlp = trim($_POST['no_tlp']);
		$alamat = trim($_POST['alamat']);
		$kirimdosen = $_POST['kirimdosen'];
		if ($kirimdosen) {
			$query = "INSERT INTO tbl_user Values ('','$id_dosen','$email','$password','2')";
			$query2 = "INSERT INTO tbl_dosen Values ('$id_dosen','$nama','$email','$alamat','$tmp_lahir','$tgl_lahir','$no_tlp','$jk')";
			mysql_query($query2);
			mysql_query($query);
		}
	}
 ?>