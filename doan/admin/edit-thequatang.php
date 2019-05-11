<?php
require("config/model.php");
$model=new model();
if(isset($_GET['id'])){
	$id=$_GET['id'];
$sql="select *from capdo where id_capdo=$id limit 1";
	$data=$model->select($sql);
	$row=$data->fetch_assoc();
	?>
	<div class="col-xs-12 col-sm-12 bg-white margin padding">
		<h2 class="h2-color ">Thay đổi thẻ quà tặng</h2>
		<h5 class="col-xs-12 col-sm-12">Tên cấp độ thẻ:<span style="color: red"><?=$row['namecapdo']?></span></h5>
		
		<form action="./" method="post">
		
		<div class="col-xs-12 col-sm-12 margin">
		<h5>Phần trăm giảm giá:<span class="red">*</span></h5>
		<input type="text" value="<?=$row['phantram']?>" name="phantram" id="phantram" min="0" required>
	    </div>
	    <div class="col-xs-12 col-sm-12 margin">
	    <h5>Mô tả:</h5>
		<textarea cols="50" rows="5" name="description"><?=$row['descriptioncapdo']?></textarea>
		
		</div>
		<input type="hidden" name="updatethequatang" value="1">
		<input type="hidden" name="id" value="<?=$id?>">
		<button type="submit" class="btn btn-generation2">Cập nhật</button>
		</form>
	</div>
	<script>
		 $("#phantram").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
       
               return false;
    }
   });
</script>
	<?php
}
else{
	?>
	<script>
		 window.history.pushState({}, "Hide", "./");
				 location.reload();
</script>
	<?php
}
?>