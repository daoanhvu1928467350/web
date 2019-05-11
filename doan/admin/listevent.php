<?php
require("config/model.php");
$model=new model();
$sql="select * from event";
$data=$model->select($sql);
?>
<H2 class="h2-color">Danh sách sự kiện</H2>
<div class="col-xs-12 col-sm-12 margin padding row">

<?php
	if($data->num_rows>0){
		while($row=$data->fetch_assoc()){
	?>
<div class="item-event col-xs-3 col-sm-3">
<div class="item-close" id="<?=$row['id_event']?>">
<i class="fas fa-window-close icon-close h2-color "></i>
</div>
<a href="./?element-sukien=1&&id=<?=$row['id_event']?>">
	<img src="<?=$row['image_event']?>">
	</a>
</div>
<?php
		}
	}
		?>
</div>
<script src="js/listevent-js.js"></script>