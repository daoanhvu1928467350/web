<?php
require("config/model.php");
$model=new model();
$sql="select * from element_of_people";
$data=$model->select($sql);
?>
<h5 class="h2-color">Thêm mới giá vé</h5	>
<div id="chonnguoi">
<h5>Chọn độ tuổi:<span class="red">*</span></h5>
<!--
<div id="selected-ticket" class="col-sm-12 col-xs-12 row  ">
	<div class="item-selected-ticket col-sm-11 col-xs-11" >
		
	</div>
	<i class="fas fa-caret-up col-sm-1 col-xs-1" style="font-size: 30px; color: #FFA300" id="font-ticket"></i>
</div>-->
	<?php
if($data->num_rows>0){
?>
	
<select class="form-control"  id="select-ticket" >
<?php
	while($row=$data->fetch_assoc()){
	?>
	<option value="<?=$row['id_loainguoi']?>" class="item-option"><?=$row['loainguoi']?></option>
	<?php
	}
		?>
</select>
<?php
}
	?>
</div>
<div id="thu">
<h5>Chọn ngày trong tuần:<span class="red">*</span></h5>
<div id="selected-ngay" class="col-sm-12 col-xs-12 col-md-12 row  ">
	<div class="item-selected-ticket col-sm-11 col-xs-11" >
		
	</div>
	<i class="fas fa-caret-up " style="font-size: 30px; color: #FFA300" id="font-ticket"></i>
</div>
<div id="error-chonngay" class="red">
	
</div>
	<select class="form-control" id="select-ngay"  size="4">
		<option value="2">Thứ 2</option>
		<option value="3">Thứ 3</option>
		<option value="4">Thứ 4</option>
		<option value="5">Thứ 5</option>
		<option value="6">Thứ 6</option>
		<option value="7">Thứ 7</option>
		<option value="8">Chủ nhật</option>
		<option value="9">Ngày lễ</option>
		<option value="10">Ngày tri ân</option>
		
	</select>
</div>
<div id="loaive">
<h5>Loại vé:</h5>
<select class="form-control" id="loaive1">
	<?php
	$sql="select * from loaive";
	$data=$model->select($sql);
	if($data->num_rows>0){
		while($row1=$data->fetch_assoc()){
		?>
		<option value="<?=$row1['id_loai']?>"><?=$row1['tenloai']?></option>
		<?php
		}
	}
	?>
</select>
	
</div>
<div id="gia">
<h5 >Giá vé:<span class="red">*</span></h5>
	<input type="text" class="form-control" placeholder="Giá vé" id="giave1" value="0" >
	<div id="error-giave" class="red">
	
</div>
</div>
<button class="btn btn-generation2" id="giave">Tạo giá vé</button>
<script src="js/ticket-js.js"></script>
