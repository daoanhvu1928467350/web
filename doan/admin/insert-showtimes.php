<?php
require("config/model.php");
$model=new model();
$sql="select * from rapchieuphim";
	$data=$model->select($sql);
 $today =strtotime(date("Y-m-d ")); 
?>
<div class="col-xs-12 col-sm-12 bg-white padding margin">
<h2 class="h2-color" style="text-align: center">Thêm lịch chiếu phim(1/2) </h2>

<h5>1.Chọn rạp chiếu phim</h5>
<form id="form">
<select class="form-control" form="form" name="rp" >
<?php
	if($data->num_rows>0){
		while($row=$data->fetch_assoc()){
			if(strtotime($row['ngaymorap']) <= $today){
	?>
	<option value="<?=$row['idrap']?>"><?=$row['namerap']?></option>
	<?php
			}
		}
	}
	?>
</select>
<h5>2.Chọn ngày thực thi lịch chiếu phim</h5>

<div id="div-date-calendar" class="form-group">

<input type="date" id="date-calendar" class="form-control" name="ngaychieu" >
<input type="hidden"  name="continue-lichchieuphim" value="1">

</div>
<h5>3.Số phim được chiếu</h5>
<div class="form-group">
	<input type="number" id="date-calendar" class="form-control" name="sophim" value="1" min="1" required>
</div>
<button type="submit" class="btn btn-generation2">Tiếp theo    <i class="fas fa-arrow-right" 
></i></button>

</form>

</div>
<script>
	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
  
		
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    
    
    $('#date-calendar').attr('min', maxDate);
  
});
	var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
 
$('#date-calendar').val(today);
</script>
