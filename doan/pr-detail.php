<?php
require("config/model.php");
$model=new model();
$id=$_GET['id_pr'];
$sql="select * from pr where id_pr=$id limit 1";
$data=$model->select($sql);
if($data->num_rows>0){
	while($row=$data->fetch_assoc()){
?>
<h2 class="h2-color" class="col-sm-12 col-xs-12" style="text-align: center"><?=$row['namepr']?></h2>
<div class="col-sm-12 col-xs-12 row non-row" id="pr-detail">

	<div class="col-sm-4 col-xs-4">
		<img src="<?=$row['imagepr']?>" class="col-sm-12 col-xs-12">
	</div>
	<div class="col-sm-8 col-xs-8">
		
			<?=$row['contentpr']?>
		
	</div>
</div>
<?php
	}
}
	?>