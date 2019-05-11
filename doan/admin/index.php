<!doctype html>
<?php
session_start();
if(isset($_SESSION['admin'])){
	

?>
<html>
<head>
<meta charset="utf-8">
<title>Home,Admin</title>
<?php
	require("config/helper.php");
	require("config/controller.php");
	?>
	<link rel="stylesheet" href="css/index-css.css">
	<link rel="stylesheet" href="css/menu-horizontal-css.css">
	<link rel="stylesheet" href="./css/about-component-css.css">
	<link rel="stylesheet" href="css/insert-film-css.css">
	<link rel="stylesheet" href="css/insert-cumrap-css.css">
	<link rel="stylesheet" href="css/insert-pr-css.css">
	<link rel="stylesheet" href="css/thuvienanh-css.css">
	<link rel="stylesheet" href="css/insert-rapchieuphim-css.css">
	<link rel="stylesheet" href="css/insert-phongchieuphim-css.css">
	<link rel="stylesheet" href="css/insert-showtimes-css.css">
	<link rel="stylesheet" href="css/insert-event-css.css">
	<link rel="stylesheet" href="css/insert-ticket-css.css">
	<link rel="stylesheet" href="css/statistic-css.css">
	<link rel="stylesheet" href="css/list-event-css.css">
	<link rel="stylesheet" href="css/element-sukien-css.css">
	<link rel="stylesheet" href="css/danhsachve-css.css">
	<link rel="stylesheet" href="css/list-rapchieuphim-css.css">
	<link rel="stylesheet" href="css/listfilm-css.css">
	<link rel="stylesheet" href="css/insert-loaive.css">
	<link rel="stylesheet" href="css/thequatang.css">
	<link rel="stylesheet" href="css/edit-rapchieuphim-css.css">
	<link rel="stylesheet" href="css/lichchieuphim-css.css">
	<script src="js/menu-horizontal-js.js"></script>
	<script src="js/index-js.js"></script>
	
	
</head>

<body>
<header class="col-sm-12">
	<div id="menu-vertical" class="col-sm-9" >
		<img src="image/sidebar-menu-copy.png" id="img-icon">
		<a href="logout.php">
		<div id="quit">
			<img src="image/quit.png" id="img-quit">
			Đăng xuất
		</div>
		</a>
	</div>
	<div id="menu-horizontal" class="col-sm-3">
		<?php
	require('menu-horizontal.php');
	?>
	</div>
</header>
<main>
	<div id="main" class="col-sm-9">
	
	
	</div>
	
</main>

<?php
	$main=new controller();
	$main->invoke();
	?>
	<div class="spinner-border text-warning" id="waiting"></div>
	<div id="night"></div>
</body>
</html>
<?php
}
else{
	header("Location:login.php");
}
	?>