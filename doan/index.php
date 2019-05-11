<!doctype html>
<?php
session_start();


?>
<html>
<head>
<meta charset="utf-8">
<title>Home,Cinema Life</title>
<?php
	require("config/helper.php");
	
	?>
	<!-- 
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/header.css">
	<link  rel="stylesheet" href="css/mid.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/register-user.css">
	<link rel="stylesheet" href="css/event-css.css">
	<link rel="stylesheet" href="css/infomation-event-css.css">
	<link rel="stylesheet" href="css/menu-css.css">
	<link rel="stylesheet" href="css/account-user-css.css">
	<link rel="stylesheet" href="css/phim-mid-css.css">
	<link rel="stylesheet" href="css/chitiet-thongtin-phim-css.css">
	<link rel="stylesheet" href="css/thongtin-phimdangchieu-css.css">
	<link rel="stylesheet" href="css/pr-css.css">
	<link rel="stylesheet" href="css/datve.css">
   <link rel="stylesheet" href="css/modal-trailer.css">
    <link rel="stylesheet" href="css/datcho-css.css">
    <link rel="stylesheet" href="css/all-rap-css.css">
    <link rel="stylesheet" href="css/pr-detail-css.css">
    <link rel="stylesheet" href="css/rapsapmo-css.css">
    <link rel="stylesheet" href="css/login-thanhtoan.css">
    <link rel="stylesheet" href="css/thanhtoan-css.css">
    <link rel="stylesheet" href="css/filter-css.css">
	<script src="js/header.js"></script>
	<script src="js/menu-js.js"></script>
	<script src="js/img-error-thanhtoan-js.js"></script>
	
	-->
<?php
	include("./config/color.php");
	?>
</head>

<body>
<div class="container-fluid col-sm-12 col-xs-12">
	<header class="col-sm-12 col-xs-12 bottom" >
		<div id="header" class="col-sm-12 col-xs-12">
			<?php
			require("header.php");
			?>
		</div>
		</header>
		<header id="link-reponsive-menu" class="col-xs-12 col-sm-12">
			<?php
		require("./element-reponsive/div-link-menu.php");
			?>
		</header>
		<header id="header-menu" >
			<div id="menu">
			<div id="img-menu-item" class="col-sm-2">
	<img src="image/433d83f7e481f35245f8c6bb7c7591d8.gif">
           </div>
			<div class="row"></div>
			<div class="row">
				<div class="container col-sm-12" id="menu-official">
					<?php
					require("menu-official.php");
					?>
				</div>
			</div>
			<div class="row"></div>
			
		</div>
		
		</header>
		<header id="pr">
			<div class="container-fluid" id="container-menu">
		<div id="slide-tintuc" class="container">
			
		</div>
		</div>
		</header>
		
		<header>
		
		<div id="breadcrumb">
			<?php
			require("breadscrum.php");
			?>
		</div>
		
		</header>
		
	
	<main>
	
		<div id="main" class="container ">
			
		</div>
		
	</main>
	<footer >
		<?php
		require("footer.php");
		?>
	</footer>
	
	<div class="spinner-border text-warning" id="load"></div>
	<div id="night2"></div>
	<div class="img-error-thanhtoan">
		<div id="close-img-error-thanhtoan">
			<i class="fas fa-window-close" style="font-size: 20px"></i>
		</div>
		<img src="image/netflix-background-9.png">
	</div>
</div>


<?php
	require("config/controller.php");
	$main=new controller();
	$data=$main->invoke();
	require("login-thanhtoan.php");
	echo $data;
	require("modal-trailer.php");
	?>
</body>

</html>