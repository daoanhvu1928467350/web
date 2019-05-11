<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Điều khoản giao dịch</title>
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
	<h2 class="h2-color">Điều khoản giao dịch</h2>
	<?=$row['dieukhoangiaodich']?>
	</main>
	<footer  class="col-xs-12 col-sm-12 footer">
		<div class="col-xs-12 col-sm-12" id="footer">
			
		</div>
	</footer>
</div>
</body>
</html>