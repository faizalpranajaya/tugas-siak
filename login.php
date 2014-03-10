<?php
require_once 'core/config.php';
if (!isset($_SESSION['username'])) {
		if (isset($_POST['username'])) {
		 $username = htmlentities(trim($_POST['username']));
		 $password = htmlentities(md5($_POST['password']));
		 $login = mysql_query("SELECT * FROM tbl_user where username='$username' AND password='$password' or email='$username' AND password='$password'");
		 $ceklogin = mysql_num_rows($login);
		 $ceklevel = mysql_fetch_object($login);
		 	if ($ceklogin >=1) {
		 		$login=1;
		 		$_SESSION['username'] = $username;
		 		$_SESSION['password'] = $password;
		 		if ($ceklevel->level==1) {
			 		$_SESSION['level'] = 1;
		 			header('location:dashboard.php');
		 		}elseif ($ceklevel->level==2) {
		 			$_SESSION['level']=2;
		 			header('location:dashboard.php');
		 		}elseif ($ceklevel->level==3) {
		 			$_SESSION['level']=3;
		 			header('location:dashboard.php');
		 		}
		 	}else{
		 		$login=0;
		 	}
	}
	}else{
		header('location:index.php');
	}
if($_POST['remember']) {
setcookie('remember_me', $_POST['username'], $year);
}
elseif(!$_POST['remember']) {
	if(isset($_COOKIE['remember_me'])) {
		$past = time() - 100;
		setcookie(remember_me, gone, $past);
	}
}
 ?>
<div class="login">
 <h2>Login</h2>
 <?php 
 	if ($_REQUEST['page'] == "login") {
		if ($login == 0) {
			echo "Username atau Password anda salah men!";
		 }
		}else{
			echo "<h5>Silahkan isi username dan password anda untuk login...</h5>";
	}
  ?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=login" method="post" class="form-signin" role="form">
 <input type="text" name="username" class="form-control" placeholder="ID/EMAIL" required autofocus> <br>
 <input type="password" name='password' class="form-control" Placeholder="PASSWORD" required><br>
   <div class="checkbox">
    <label>
      <input type="checkbox"  name="remember" value="1"> Remember me
    </label>
  </div>
 <input type="submit" name="login" Value="LOGIN" class="btn btn-lg btn-primary btn-block">
 <br>
 <p class="alert alert-warning">Belum punya akun ? <a href="?page=Daftar" class="alert-link">daftar sekarang</a></p>
 </form>
</div>