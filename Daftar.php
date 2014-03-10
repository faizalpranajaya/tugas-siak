<div class="login">

	<?php require_once 'core/config.php'; ?>
	<h2>Daftar</h2>
<form action="" method="post" class="form-signin" role="form">
		<input type="text" name="no_stb" placeholder="No Stambuk" required="required" size="30" class="form-control">
		<input type="text" name="nama_mhs" placeholder="Nama" required="required" class="form-control">
		<input type="password" name="password" placeholder="Password" required="reuqired" class="form-control">
		<input type="password" name="repassword" placeholder="RePassword" required="required" class="form-control">
		<input type="email" name="email" placeholder="Email" required="required" class="form-control">
		<select class="form-control"  placeholder="Jurusan" name="jurusan">			
  			<option  name="jurusan" value="Teknik Informatika">Teknik Informatika</option>
 			<option  name="jurusan" value="Sistem Informasi">Sistem Informasi</option>
		<input type="text" name="angkatan" placeholder="Angkatan" required="required" size="4" class="form-control">
		<input type="text" name="tempatlahir" placeholder="Tempat Lahir" required="required" class="form-control">
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
		<input type="submit" name="kirimdaftar" class="btn btn-lg btn-primary btn-block" value="Daftar!" >
		
</form>

<?php 
		$no_stb = $_POST['no_stb'];
		$nama_mhs = $_POST['nama_mhs'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		$jurusan = $_POST['jurusan'];
		$angkatan = $_POST['angkatan'];
		$tmp_lahir = $_POST['tempatlahir'];
		$tgl_lahir = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tgl'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$no_tlp = $_POST['no_tlp'];
		$daftar = $_POST['kirimdaftar'];
		if ($daftar) {
			mysql_query("INSERT into tbl_sementara values('','".$no_stb."','".$nama_mhs."','".$email."','".$alamat."','".$jurusan."','".$tmp_lahir."','".$tgl_lahir."','".$jk."','".$angkatan."','".$no_tlp."','".$password."','3')")or die("mysql error");
			header('location:index.php');
		}
 ?>
 </div>