<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thành viên</title>
<?php
	require("config/helper.php");
	?>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/header.css">
	<link  rel="stylesheet" href="css/mid.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/register-user.css">
</head>

<body>
<header>
	<?php
	
	require("header.php");
	?>
</header>
<main>
<?php
	if(isset($_GET['login'])){
		require("login-user.php");
	}
	else if($_GET['register']){
		require("form-signup.php");
	}
	else {
		
	}
	
	?>
</main>
<footer>
<div id="footer"></div>
</footer>
</body>
</html>