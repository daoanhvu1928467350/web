<?php
require("config/model.php");
$model=new model();
$sql="select * from pr";
$data=$model->select($sql);
?>
<h2 class="h2-color">Danh sách quảng cáo</h2>
<div class="col-xs-12 col-sm-12 margin-left padding row">
	
	<?php
	if($data->num_rows>0){
		while($row=$data->fetch_assoc()){
			?>
		
			<div class="item-event col-sm-3 col-xs-3">
				
			<div class="item-close-pr" id="<?=$row['id_pr']?>">
<i class="fas fa-window-close icon-close h2-color "></i>
</div>
			<a href="./?updatequangcao=1&&id=<?=$row['id_pr']?>">
				<img src="<?=$row['imagepr']?>" height=200 width=300 >
				</a>
			</div>
			<?php
		}
	}
	?>
</div>
<script src="js/list-pr-js.js"></script>