<?php
if(isset($_GET['error-upload'])){
	?>
	<script>
		alert('Lỗi upload không đúng định dạng txt');
</script>
	<?php
}
?>
<div class="col-xs-12 col-sm-12 bg-white padding margin-left">
	<h2 class="h2-color">Các thành phần liên quan đến phim</h2>
</div>
<div class="col-xs-12 col-sm-12 bg-white padding margin">
	<h5>Thêm thể loại phim:<span class="red">*</span></h5>
	<input type="text" name="theloai" class="form-control" value="" placeholder="Nhập thể loại cẩn thêm vào đây" id="theloai">
	<div class="red" id="error-theloai"></div>
	<button class="btn btn-generation2" id="click-theloai">Thêm thể loại</button>
	
</div> 
<div class="col-xs-12 col-sm-12 bg-white padding margin">
	<h5>Thêm diễn viên:<span class="red">*</span></h5>
	<input type="text" name="theloai" class="form-control" value="" placeholder="Nhập tên diễn viên vào đây" id="dienvien">
	<div class="red" id="error-dienvien"></div>
	<button class="btn btn-generation2" id="click-dienvien">Thêm diễn viên</button>
	<button class="btn btn-generation2" id="click-dienvien2">Thêm nhiều diễn viên</button>
	
</div>
<div class="col-xs-12 col-sm-12 bg-white padding margin">
	<h5>Thêm đạo diễn:<span class="red">*</span></h5>
	<input type="text" name="theloai" class="form-control" value="" placeholder="Nhập tên diễn viên vào đây" id="daodien">
	<div class="red" id="error-daodien"></div>
	<button class="btn btn-generation2" id="click-daodien">Thêm đạo diễn</button>
	<button class="btn btn-generation2" id="click-daodien2">Thêm nhiều đạo diễn</button>
	
</div>
<div class="div-center-700" id="many-dienvien">
	<div class="header-center-700">
		<h2 class="h2-color">Thêm nhiều diễn viên</h2>
		<div class="close-insert-dienvien">
		<i class="fas fa-window-close icon-close h2-color"></i>
		</div>
	</div>
	<div class="body-center-700 padding">
		<form method="post" enctype="multipart/form-data" action="process_file_upload.php">
	
			<input type="file" name="upload" value="">
     	<input type="submit" value="Upload tệp" name="submit-dienvien" class="btn btn-generation"> 
		</form>
	</div>
</div>
<div class="div-center-700" id="many-daodien">
	<div class="header-center-700">
		<h2 class="h2-color">Thêm nhiều đạo diễn</h2>
		<div class="close-insert-dienvien">
		<i class="fas fa-window-close icon-close h2-color"></i>
		</div>
	</div>
	<div class="body-center-700 padding">
		<form method="post" enctype="multipart/form-data" action="process_file_upload.php">
	
			<input type="file" name="upload" value="">
     	<input type="submit" value="Upload tệp" name="submit-daodien" class="btn btn-generation"> 
		</form>
	</div>
</div>
<script src="js/muclienquan-js.js"></script>
