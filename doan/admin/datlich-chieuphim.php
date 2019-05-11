<?php

if(isset($_POST['ngaychieu'])){
$ngaychieu=$_POST['ngaychieu'];
$sophim=$_POST['sophim'];
$rp=$_POST['rp'];
	require("config/model.php");
	$model=new model();
	$sql="select * from listfilm";

    
	?>
	<div class="col-xs-12 col-sm-12 bg-white margin padding">
	<table class="table">
	<thead>
	     <th>STT</th>
		<th>Tên phim</th>
		<th>Suất phim</th>
		
	</thead>
		<tbody>
		
		<?PHP
	   for($i=0;$i<$sophim;$i++){
	?>
			<tr>
			<td><?=$i?></td>
			<td>
			
				<select class="select-calendar form-control" name="id-film" id="<?=$i?>">
				<?php
		$data=$model->select($sql);
		 while($row=$data->fetch_assoc()){
			 $anhdaidien=$row['anhdaidien'];
		?>
				
					<option  value="<?=$row['id']?>"  style="background-image: url('<?=$anhdaidien?>')">
					
					
					<?=$row['namefilm']?>
					
					</option>
					<?php
		 }
			 ?>
				</select>
			</td>
			<td>
				<input type="number" class="form-control suatphim"  name="suatphim" value="1" >
			</td>
			</tr>
			<?php
	   }
		   ?>
		</tbody>
		
	</table>
	<div>
	<input type="hidden" id="ngaychieu" value="<?=$ngaychieu?>">
	<input type="hidden" id="rp" value="<?=$_POST['rp']?>">
	<button type="submit" class="btn btn-generation2" id="taolich">Tạo lịch</button>
	<button type="submit" class="btn btn-generation2" id="back"><i class="fas fa-arrow-left"></i>  Trở về</button>
</div>
</div>
	<?php
	
}
?>
<?php
if(isset($_POST['selectthoiluong'])){
	?>
	<script>
		//alert('xin chao');
</script>
	<?php
}
?>
<script src="js/datlich-chieu-js.js"></script>