<?php
require("config/model.php");
$model=new model();
$sql="select * from rapchieuphim";
$data=$model->select($sql);

?>
<h2 class="h2-color text-align ">Lịch chiếu phim:</h2>
<div class="col-xs-12 col-sm-12 row margin-left padding bg-white " style="height: 100%" >
	
	<div id="selected-chieuphim" class="col-xs-5 col-sm-5">
	
		<h5 class="col-xs-12 col-xs-12">Chọn rạp chiếu phim:</h5>
		<select  id="rapchieuphim-select" class="col-xs-12 col-sm-12 form-control">
		<?php
			while($row=$data->fetch_assoc()){
			?>
			<option value="<?=$row['idrap']?>"><?=$row['namerap']?></option>
			<?php
			}
				?>
		</select>
	</div>
	<div id="selected-ngaychieu" class="col-xs-5 col-sm-5">
		<h5 class="col-xs-12 col-sm-12">Chọn rạp chiếu phim</h5>
		<input type="date"  class="col-xs-12 col-sm-12 form-control" id="date-lichchieu">
	</div>
	<div id="element-lichchieu" style="height: auto">
		
	</div>
</div>
<script src="js/list-calendar-js.js"></script>
