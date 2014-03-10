<?php 
	$show ="";			
	if (isset($_GET['show'])) {
		$show=$_GET['show'];		
		}
	if (empty($show)) {
		$judul = "Dashboard";
	}else{
		$judul = $show;
	}
	require_once 'core/function.php';
	require_once 'header.php';
	if (isset($_SESSION['username'])&& isset($_SESSION['password'])) {
 ?>
	<body>
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">		
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<?php require_once 'menu.php'; ?>
				</li>
				<li><a href="dashboard.php">Welcome Back <?php showname($_SESSION['username']); ?></a></li>
				<?php if ($_SESSION['level'] == 1){
				$antri = new Pending() ?>
				<li><a href="?show=Pending">Pending  <span class="label label-info"><?php $antri->row();?></span></a></li>
				<?php  }?>	
				<li><a href="logout.php">Logout</a></li>
			</ul>
		<div class="container">

			<div class="content">
			<?php 
				if (isset($_GET['show'])) {
					$show=$_GET['show'];		
				}
				if (empty($show)) { ?>
					<img src="images/Under-Development2.gif" alt="">
					
				<?php	
				}else{
					require_once 'Includes/'. $show .'.php';

				}
			 ?>
		
		</div><!-- /container -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
<?php }else{
	header('location:index.php');
}
 ?>