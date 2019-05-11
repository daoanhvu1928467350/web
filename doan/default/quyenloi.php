<?php
require("../config/model.php");
$model=new model();
$sql="select * from capdo";
$data=$model->select($sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quyền lợi</title>
<?php
	require("./config/helper.php");
	
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
	
		<div id="main" class="container-fluid col-sm-12 col-xs-12">
			
	<h2 style="color:#FFA300 ">Quyền lợi đối với các cấp độ thẻ</h2>
<?php
while($row=$data->fetch_assoc()){
?>
<div class="col-sm-12 col-xs-12 ">
<b>Đối với <?=$row['namecapdo']?></b>
<div>
	<?=$row['descriptioncapdo']?>
</div>
</div>

		
		
	

<?php
}
	
	?>
	<DIV>
	<b style="color: red">
		Ngoài ra,Bạn có thể đổi điểm tích lũy để láy đồ ăn/thức uống trong rạp
		</b>
	</DIV>
	</div>
	
	</main>
<footer  class="col-xs-12 col-sm-12 footer">
		<div class="col-xs-12 col-sm-12" id="footer">
			
		</div>
	</footer>
	</div>
</body>
</html>
