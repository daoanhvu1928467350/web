<?php
require("config/model.php");
$model=new model();
if(isset($_POST['rapchieuphim'])){
	$idrap=$_POST['rapchieuphim'];
	$ngay=$_POST['ngaychieu'];
	$sql="select * from rapchieuphim_khuvucchieu where idrap=$idrap ";
	
	$data=$model->select($sql);
	
	if($data->num_rows>0){
	?>
	<div class="showtimes1" style="height: auto">
			
		
	<?php
	while($row=$data->fetch_assoc()){
		
		$idkhuvuc=$row['id_khuvuc'];
		$sql2="select *  from lichchieuphim   inner join listfilm on listfilm.id=lichchieuphim.id and  id_khuvuc=$idkhuvuc and ngaychieu='$ngay'";
		
		$data2=$model->select($sql2);
		if($data2->num_rows>0){
			?>
			<input type="hidden" id="rapchieuphim" value="<?=$idrap?>">
			<input type="hidden" id="ngaychieuphim" value="<?=$ngay?>">
			<table class="table margin-left col-xs-12 col-md-12 col-lg-12" id="table-lichchieuphim">
		<thead>
		  
			<th>Tên phim</th>
			  <th>Khu vực chiếu</th>
			<th>Giờ chiếu phim</th>
			<th>Ngày chiếu</th>
			<th>Xóa</th>
		</thead>
		<tbody>
			<?php
		while($row1=$data2->fetch_assoc()){
			
		?>
		<tr>
				<td><?=$row1['namefilm']?></td>
				<td><?=$row['name_khuvuc']?></td>
				<td><?php $a=$row1['giochieuphim'];
						$thoiluong=$row1['thoiluong'];
						$thoiluonghour=floor($thoiluong/60);
						
						$thoiluongminute=$thoiluong%60;
						$hour=floor($a/60)-$thoiluonghour;
						$phut=$a%60-$thoiluongminute;
						if($phut<0){
							$hour=$hour-1;
							$phut=$a%60+60-$thoiluongminute;
						}
						$hour=9+$hour;
						$giochieu=$hour.":".($phut<10?'0'.floor($phut/10)*10:floor($phut/10)*10); 
			          echo $giochieu;
					?></td>
				<td><?=date("d/m/y",strtotime($row1['ngaychieu']))?></td>
				<td><div id="<?=$row1['id_khuvuc']?>" class="cursor delete-lichchieuphim" name="<?=$row1['id']?>"><i class="far fa-trash-alt h2-color"></i>
				<input type="hidden" id="<?=$row1['id']?>" value="<?=$a?>">
				
				</div></td>
			</tr>
		<?php
		}
			?>
			</tbody>
	</table>
		<script src="js/lichchieuphim-js.js"></script>
			<?php
		}
		
		
	}
	 
	?>
	</div>
	<?php
	}
	else{
		
	}
	
}
else{
	?>
	<script>
		  window.history.pushState({}, "Hide", "./?listcalendar1=1");
				 location.reload();
</script>
	<?php
}
?>