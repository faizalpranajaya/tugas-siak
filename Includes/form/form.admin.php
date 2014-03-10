<form action="" method="post" class="form-signin" role="form">
	<input type="text" name="username"  required="required" size="30" class="form-control" placeholder="UserName">
	<input type="email" name="email"  required="required" size="30" class="form-control" placeholder="Email">
	<input type="password" name="password"  required="required" size="30" class="form-control" placeholder="Password">
	<input type="password" name="re-password" id=""  required="required" size="30" class="form-control" placeholder="Repassword">
	<input type="submit" name="kirimadmin" class="btn btn-lg btn-primary btn-block" value="Daftar!" >
</form>
<?php 
	if (isset($_POST)) {
	 	$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = md5(trim($_POST['password']));
		$kirimadmin =$_POST['kirimadmin'];
		if ($kirimadmin) {
			mysql_query("INSERT INTO tbl_user VALUES ('','$username','$email','$password','1')");
		}
	 } 
 ?>