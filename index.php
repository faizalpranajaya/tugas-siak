
<?php 
	$page ="";			
	if (isset($_GET['page'])) {
		$page=$_GET['page'];		
		}
	if (empty($page)) {
		$judul = "Home | Sistem Informasi Akademik";
	}else{
		$judul = $page;
	}
require_once 'header.php'; 
?>
<body>
		<div class="header-area">
			<h1><a href="index.php">Welcome To Sistem Informasi akademik</a></h1>

		</div>
		<div class="container">
			
		<?php 
			if (isset($_SESSION['username'])) {  
				header('location:dashboard.php');	
			}else{
				if (isset($_GET['page'])) {
					$page=$_GET['page'];		
				}
				if (empty($page)) { 
					require_once 'login.php'; 
				}else{
					$judul =$file;
					$file="$page.php";
					include ($file);
				}
			}
	 	?>
		</div>
</body>
</html>