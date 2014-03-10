<?php 
	session_start();
	require_once 'config.php';

//function untuk menampilkan nama
	function showname($username){
		if ($_SESSION['level']==2) {
				$tabel="tbl_dosen";
				$id="id_dosen";	
				$nama="nama_dosen";
		}elseif ($_SESSION['level']==3) {
				$tabel="tbl_mhs";
				$id="id_mhs";
				$nama="nama_mhs";
		}
		if ($_SESSION['level']== 2 || $_SESSION['level']==3) {
			$sql  = mysql_query("SELECT * from $tabel where $id='$username' or email ='$username'");
			while ($show = mysql_fetch_object($sql)) {
			echo $show->$nama;
		}
		}elseif($_SESSION['level']==1){
			echo $_SESSION['username'];
		}

}
	//cek username and password
	function cekuser($username,$password,$level) {
		$user = mysql_query("SELECT * FROM tbl_user where username='$username' AND password='$password' AND level='$level' or email='$username' AND password='$password' AND level='$level'");
		$cek = mysql_num_rows($user);
		if ($cek >=1 && $_SESSION['level']==1) {
			$_SESSION['cek']=1;
		}elseif ($cek >=1 && $_SESSION['level']==2) {
			$_SESSION['cek']=2;
		}elseif ($cek >=1 && $_SESSION['level']==3) {
			$_SESSION['cek']=3;
		}
	}	
	
	//fungsi untuk input krs
	function input_krs($id_mhs,$no_mk,$tanggal,$semester){
		mysql_query("INSERT INTO tbl_krs values('','$id_mhs','$id_mk','tanggal','semester')");
		header('location:mahasiswa.php');
	}

	//fungsi untuk cek data
	function cek_data_krs($id_mhs,$id_mk,$semester){
		$krs = mysql_query("SELECT tbl_mhs.id_mhs, tbl_mk.sd");
	}
	/**
	* Untuk Registrasi Pending
	*/
	class Pending
	{
		public function row()
		{
			$cek = mysql_query("SELECT no_antri FROM tbl_sementara");
			$jml_pending = mysql_num_rows($cek);
			echo $jml_pending;
		}
		public function show()
		{	

			//Comming soon
		}
		public function action($aksi)
		{
			# code...
		}
	}
	function judul(){
	echo "test doang";
}

 ?>
