<?php
if(isset($_POST['id'])){
	require("config/model.php");
	$model=new model();
	$id=$_POST['id'];
	$sql="select * from bapnuoc where id_bapnuoc=$id limit 1";
	$data=$model->select($sql);
	$row=$data->fetch_assoc();
?>
<h2 class="h2-color text-align">Thay đổi thông tin bắp nước</h2>
<div class="col-xs-12 col-sm-12 margin padding bg-white">
	<div class="form-group">
     <label for="tencombo"><b>Tên combo:</b></label>
	<input type="text" class="form-control" placeholder="Tên combo" value="<?=$row['namebap']?>" name="tencombo" id="tencombo-change">
	<input type="hidden" value="<?=$row['namebap']?>" id="tenloai-duphong">
	<input type="hidden" value="<?=$id?>" id="id-loai">
</div>
<div class="form-group">
     <label><b>Giá combo:</b></label>
     <input type="text" class="form-control" placeholder="Giá combo" value="<?=$row['gia']?>" name="giacombo" id="giacombo-change">
     <input type="hidden" id="giaduphong" value="<?=$row['gia']?>">
</div>
<div class="form-group">
     <label><b>Chi tiết về gói combo:</b></label>
     <div class="col-sm-12 col-xs-12 " id="detail-combo">
     	<p id="p-detail">
     		<?=$row['detailbap']?>
     	</p>
     </div>
     
     <div class="col-sm-12 col-xs-12 mota-pr change-combo" id="div-mota">
    <div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html">
		
	</iframe>
	</div>
</div>

	<button class="btn btn-generation2" id="click-change-goicombo1">Cập nhật gói combo</button>

</div>
<script src="js/iframe-js.js"></script>
<script src="js/update-bapnuoc-js.js"></script>
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