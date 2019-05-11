<?php
/*
require("config/model.php");
$model=new model();*/
?>
<fieldset>
	<lengend><h5 class="h2-color">Thêm phòng chiếu cho từng rạp chiếu phim</h5></lengend>
	
	<h5>1.Chọn rạp chiếu phim:</h5>
	<div>
	
	<select id="select-for-roomfilm" name="room" form="form-phongchieuphim" class="form-control">
	<?php
		$sql="select * from rapchieuphim";
		$data=$model->select($sql);
		if($data->num_rows>0){
			while($row=$data->fetch_assoc()){
				
			
		?>
		<option value="<?=$row['idrap']?>"><?=$row['namerap']?></option>
		<?php
			}
		}
			?>
	</select>
	</div>
	<form action="./config/query-data-insert.php" id="form-phongchieuphim" method="post">
	<h5>2.Thêm tên phòng chiếu:<span class="red">*</span></h5>
	<div>
		<input type="text" class="form-control" id="namephongchieu" name="namephongchieu" value="Rạp">
	</div>
	<h5>3.Thêm  số lượng hàng ghế(tối đa 24 hàng ghế) trong phòng chiếu:<span class="red">*</span></h5>
	<div>
	
		<input type="number" class="form-control" id="soluonghangghe"  min="1" max="24" value="1" name="soluonghangghe" required>
		
	</div>
	<h5>4.Thêm số lượng ghế(tối đa ) trong một hàng:<span class="red">*</span></h5>
	<div>
		<input type="number" class="form-control"  min="1" id="max-ghe" value="1" name="max">
	</div>
	<h5>5.Thêm tổng số lượng ghế:<span class="red">*</span></h5>
	<div>
		<input type="number" class="form-control"  min="1" id="sum-ghe" value="1" name="sum">
	</div>
	
	<div>
	<input type="hidden" name="insertphongchieuphim" value="1">
	<i class="col-sm-12 col-xs-12 red">/*Hệ thống sẽ tự động đặt tên các dãy hàng ghế theo thứ tự bảng chữ cái A-Z*/</i>
	</div>
	
	<button type="submit" class="btn btn-generation" id="submit-phongchieuphim">Thêm dữ liệu</button>
	</form>
</fieldset>
<script src="js/insert-phongchieuphim.js"></script>