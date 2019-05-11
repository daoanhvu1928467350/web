<?php
require("./config/model.php");
$model=new model();
$sql="select * from cumrap ";
	$data=$model->select($sql);
$today =strtotime(date("Y-m-d "));
if($data->num_rows>0){
	
?>
<div id="cumrap-element">
<h2 class="h2-color" style="text-align: center">Tất cả các rạp</h2>
<ul>
	<?php
	while($row=$data->fetch_assoc()){
		
	?>
	<li class="list-type li-item-all-rap "><a href="./?all-rap=1&&id-cumrap=<?=$row['idcumrap']?>" class="anchor-background"><?=$row['namecumrap']?></a></li>
	<?php
	}
		?>
		</ul>
</div >

<?php
	if(isset($_GET['id-cumrap'])){
		$id=$_GET['id-cumrap'];
		$sql1="select * from rapchieuphim where idcumrap=$id";
		$data1=$model->select($sql1);
		if($data1->num_rows>0){
	?>
<div id="rapchieuphim-element">
<ul>
	<?php
		while($row1=$data1->fetch_assoc()){
			if(strtotime($row['ngaymorap']) <= $today){
			?>
			<li class="list-type li-item-rap "><a href="./?all-rap=1&&id-cumrap=<?=$row1['idcumrap']?>&&id-rapchieuphim=<?=$row1['idrap']?>" class="anchor-background"><?=$row1['namerap']?></a></li>
			<?php
			}
		}
		?>
		</ul>
</div>
<?php
			if(isset($_GET['id-rapchieuphim'])){
				$id_rap=$_GET['id-rapchieuphim'];
				$sql2="select * from rapchieuphim where idrap=$id_rap ";
				$data=$model->select($sql2);
				if($data->num_rows>0){
					$row2=$data->fetch_assoc();
			?>
<div id="rapchieuphim-detail" class="col-md-12 col-xs-12 col-lg-12">
	<div class="col-md-12 col-xs-12 col-lg-12">
		<img src="<?=$row2['image_daidien']?>"  >
	</div>
	<div class="night-rapchieuphim-detail col-md-12 col-xs-12 col-lg-12" >
		
	</div>
	<p class="p-night" >
			<?=$row2['namerap'].','.$row2['Addressrap'].','.$row2['quan'].','.$row2['thanhpho']?>
	</p>
</div>
<?php
				}
			}
		}
	}
		?>
<?php
}
	?>
	