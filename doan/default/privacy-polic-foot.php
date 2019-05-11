<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chính sách bảo mật</title>
<?php
	require("./config/helper.php");
	require("./config/model.php");
	$model=new model();
	$sql="select * from about ";
	$data=$model->select($sql);
	$row=$data->fetch_assoc();
	?>
	
	<?php
	include("./config/color.php");
	?>
</head>

<body>
<div class="container-fluid col-sm-12 col-xs-12" id="body">
	<header class="col-sm-12 col-xs-12 bottom" >
<?php
	require("header.php");
	?>
	</header>
	<main class="col-sm-12 col-xs-12 ">
	<h2 class="h2-color">Chính sách bảo mật</h2>
	<?=$row['chinhsachbaomat']?>
	</main>
	<footer  class="col-xs-12 col-sm-12 footer">
		<div class="col-xs-12 col-sm-12" id="footer">
			
		</div>
	</footer>
</div>
</body>
</html>