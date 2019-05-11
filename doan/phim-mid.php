<?php
$sql="select * from listfilm";
$data=$model->select($sql);
if($data->num_rows>0){
	?>
	<div id="listfilm" class="col-sm-12 col-xs-12">
		<div class="control-prev-phim"><i class="fa fa-chevron-circle-left"></i></div>
	     <div class="control-next-phim"><i class="fa fa-chevron-circle-right"></i></div>
	     <ul id="ul-phim-slide" >
		<?php
	while($row=$data->fetch_assoc()){
		 $a=(strtotime(date("Y-m-d"))-strtotime($row['ngaykhoichieu']));
		$b=strtotime(date("Y-m-d"))-strtotime($row['ngayketthuc']);
	if($a>=0&&$b<=0){
				
			 
		?>
		<li class="item col-sm-3 col-xs-3">
		
		<img src="<?=$row['anhdaidien']?>" id="img-phim-slide" class="col-sm-12 col-xs-12">
		<div class="position-muave" >
			
		</div>
		<a href="./?thongtinchitietphim=1&&id=<?=$row['id']?>">
		<button class="btn btn-default btn-muave" >Xem chi tiết</button>
		</a>
		
		</li>
		<?php
	}
	}
	?>
	</ul>
	</div>
	<?php
	
}
?>
<script src="js/phim-js.js"></script>