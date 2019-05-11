<?php
require("config/model.php");
$id=$_GET['event_id'];
$sql="select * from event where id_event=$id limit 1";
$model=new model();
$data=$model->select($sql);
$row=$data->fetch_assoc();
?>
<div id="content-event" class="col-sm-12 row non-row">
	<div class="col-sm-3" id="img-infomation-event">
		<img src="<?=$row['image_event']?>">
	</div>
	<div class="col-sm-9" id="content-infomation-event">
	<h2 class="h2-color text-align"><?=$row['nameevent']?></h2>
		
			<?=$row['content_event']?>
		
	</div>
</div>
