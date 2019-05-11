<?php
require("config/model.php");
$model=new model();
$sql="select * from rapchieuphim ";
$data=$model->select($sql);
$today =strtotime(date("Y-m-d "));
?>
<div id="rapsapmo" class="col-sm-12 col-xs-12">
<h2 class="h2-color" style="text-align: center">Rạp sắp mở</h2>
<?php
	if($data->num_rows>0){
	?>
	<ul>
	<?php
		while($row=$data->fetch_assoc()){
			if(strtotime($row['ngaymorap']) > strtotime("now")){
		?>
		<li class="li-item-rapsapmo list-type"><a href="./?will-rap=1&&id-rap=<?=$row['idrap']?>" class="anchor-background"><?=$row['namerap']?></a></li>
		<?php
		}
		}
			?>
	</ul>
	</div>
	<?php
			
	}
		?>

<?php
if(isset($_GET['id-rap'])){
	$id=$_GET['id-rap'];
?>
<div id="rapsapmo-detail" class="col-sm-12 col-xs-12">
<?php
	$sql1="select * from rapchieuphim where idrap=$id limit 1";
	$data=$model->select($sql1);
	

	
	if($data->num_rows>0){
		$row2=$data->fetch_assoc();
		
		
		if(strtotime($row2['ngaymorap']) > strtotime("now")){
	?>
	<div >
		<img src="<?=$row2['image_daidien']?>" >
	</div>
	<div class="night-rapchieuphim-detail">
		
	</div>
	<p class="p-night">
			<?=$row2['namerap'].','.$row2['Addressrap'].','.$row2['quan'].','.$row2['thanhpho']?>
		</p>
</div>

<?php
		}
	}
}
		?>